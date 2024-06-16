<?php
namespace Controllers;

use Models\Usuario;
use Models\Libro;
use Lib\Pages;
use Lib\Validation;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class UsuarioController {
    private Pages $pages;
    private Usuario $usuario;
    private Libro $libro;

    public function __construct() {
        $this->pages = new Pages();
        $this->usuario = new Usuario();
        $this->libro = new Libro();
    }

    public function login() {
        $result = [];
        $errores = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
            $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);

            if (!empty($email) && !empty($password)) {
                $result = $this->usuario->login($email, $password);
                if ($result !== false) {
                    session_start();
                    $_SESSION["id_usuario"] = $result["id"];
                    $_SESSION["rol_usuario"] = $result["rol"];

                    $libros = $this->libro->getAll();
                    $this->pages->render('libro/inicio', ['libros' => $libros]);
                } else {
                    echo "<script>alert('Datos incorrectos , REGISTRESE')</script>";
                    $this->pages->render("user/login");
                }
            } else {
                $errores["error_email"] = Validation::validar_requerido($email, "email");
                $errores["error_password"] = Validation::validar_requerido($password, "password");
                $this->pages->render('user\login', ['errores' => $errores]);
            }
        } else {
            $this->pages->render('user\login', ['errores' => $errores]);
        }
    }

    public function mostrarLogin() {
        return $this->pages->render("user/login");
    }

    public function registro() {
        $result = [];
        $errores = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);
            $apellidos = filter_var($_POST["apellidos"], FILTER_SANITIZE_STRING);
            $email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
            $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);

            if (!empty($nombre) && !empty($apellidos) && !empty($email) && !empty($password)) {
                $rol = 'lectores';
                $result = $this->usuario->register($nombre, $apellidos, $email, $password, $rol);

                if ($result) {
                    // Enviar correo de bienvenida usando PHPMailer
                    $mail = new PHPMailer(true);
                    try {
                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'pablo.lozano12.ml@gmail.com';
                        $mail->Password = 'xrnjigrthmlyrjhn';
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                        $mail->Port = 587;

                        $mail->setFrom('pablo.lozano12.ml@gmail.com', 'Tu Nombre');
                        $mail->addAddress($email, $nombre);

                        // Añadir imagen y contenido del correo
                        $mail->isHTML(true);
                        $mail->Subject = 'Bienvenido a la Biblioteca Online';
                        $mail->Body = '
                        <html>
                        <body>
                            <h1>Hola ' . $nombre . '!</h1>
                            <p>Gracias por registrarte en nuestra Biblioteca Online. Estamos encantados de tenerte con nosotros.</p>
                            <p>Para disfrutar de mayores ventajas, te invitamos a unirte a nuestro club de lectura. Como miembro del club, tendrás acceso a beneficios exclusivos como:</p>
                            <ul>
                                <li>Acceso a libros exclusivos antes de su lanzamiento.</li>
                                <li>Participación en eventos y talleres especiales.</li>
                                <li>Descuentos en nuestras publicaciones y servicios.</li>
                            </ul>
                            <p>No pierdas la oportunidad de formar parte de esta comunidad apasionada por la lectura.</p>
                            <img src="cid:library_image" alt="Club de Lectura" style="width:100%; max-width:600px;">
                            <p>¡Esperamos verte pronto en nuestros eventos!</p>
                            <p>Saludos,<br>El equipo de la Biblioteca Online</p>
                        </body>
                        </html>';

                        // Adjuntar imagen al correo
                        $mail->AddEmbeddedImage('../images/logo_library.jpg', 'library_image');

                        $mail->send();
                    } catch (Exception $e) {
                        echo "No se pudo enviar el correo. Error de PHPMailer: {$mail->ErrorInfo}";
                    }

                    $this->mostrarLogin();
                } else {
                    $this->mostrarRegistro();
                }
            } else {
                $errores["error_nombre"] = Validation::validar_requerido($nombre, "nombre");
                $errores["error_apellidos"] = Validation::validar_requerido($apellidos, "apellidos");
                $errores["error_email"] = Validation::validar_requerido($email, "email");
                $errores["error_password"] = Validation::validar_requerido($password, "password");

                $this->mostrarRegistro();
            }
        } else {
            $this->mostrarRegistro();
        }
    }

    public function mostrarRegistro() {
        return $this->pages->render("user/register");
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: inicio");
        exit();
    }

    public function listadoUsuariosLectores() {
        $usuarios = $this->usuario->mostrarUsuarios();
        $this->pages->render('libro/Listado_Libros', ['usuarios' => $usuarios]);
    }
}
?>
