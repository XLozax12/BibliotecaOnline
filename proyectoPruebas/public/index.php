<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//require '../includes/bootstrap.php';
require_once __DIR__.'/../vendor/autoload.php';

// use Controllers\ApiponenteController;
use Controllers\UsuarioController;
use Controllers\LibrosController;
use Controllers\SancionarController;
use Controllers\DashBoardController;
use Lib\Router;

use Dotenv\Dotenv;

// Añadir Dotenv
$dotenv = Dotenv::createImmutable(dirname(__DIR__.'/'));// para acceder al contenido del archivo .env
//$dotenv =Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad(); // si no existe no nos marca error*/

//Añadimos rutas

Router::add('GET','/home', function (){

    (new DashBoardController())->Inicio();});
Router::add('GET','/inicioinicio', function (){
    if (!isset($_SESSION['rol_usuario']) || ($_SESSION['rol_usuario'] !== 'lectores' && $_SESSION['rol_usuario'] !== 'bibliotecario')) {
        header('Location: inicio');
        exit;
    }
    (new DashBoardController())->Inicio();
});

Router::add('GET','/horario', function (){
    if (!isset($_SESSION['rol_usuario']) || $_SESSION['rol_usuario'] !== 'lectores') {
        header('Location: inicio');
        exit;
    }
    (new DashBoardController())->horario();
});
Router::add('GET','/eventos', function (){
    if (!isset($_SESSION['rol_usuario']) || $_SESSION['rol_usuario'] !== 'lectores') {
        header('Location: inicio');
        exit;
    }
    (new DashBoardController())->evento();
});
Router::add('GET','/actividades', function (){
    if (!isset($_SESSION['rol_usuario']) || $_SESSION['rol_usuario'] !== 'lectores') {
        header('Location: inicio');
        exit;
    }
    (new DashBoardController())->actividad();
});

Router::add('GET','/logout', function (){

    (new UsuarioController())->logout();});

Router::add('GET','/', function (){

    (new UsuarioController())->mostrarLogin();});

Router::add('GET','/inicio', function (){

    (new UsuarioController())->mostrarLogin();});

Router::add('GET','/registro', function (){

    (new UsuarioController())->mostrarRegistro();});

Router::add('POST','/registrar', function (){

    (new UsuarioController())->registro();});

Router::add('POST','/login', function (){

    (new UsuarioController())->login();});

    Router::add('GET', '/mostrarPrestar', function () {
        if (!isset($_SESSION['rol_usuario']) || $_SESSION['rol_usuario'] !== 'bibliotecario') {
            header('Location: inicio');
            exit;
        }
        (new LibrosController())->mostrarPrestar();
    });
    Router::add('GET', '/listadoCompleto', function () {
        if (!isset($_SESSION['rol_usuario']) || ($_SESSION['rol_usuario'] !== 'lectores' && $_SESSION['rol_usuario'] !== 'bibliotecario')) {
            header('Location: inicio');
            exit;
        }
        (new LibrosController())->listadoCompleto();
    });
    
        
Router::add('GET','/sancionar', function (){
    if (!isset($_SESSION['rol_usuario']) || $_SESSION['rol_usuario'] !== 'bibliotecario') {
        header('Location: inicio');
        exit;
    }
    (new SancionarController())->listadoCompletoSanciones();

}); 

Router::add('POST','/eliminar', function (){
    if (!isset($_SESSION['rol_usuario']) || $_SESSION['rol_usuario'] !== 'bibliotecario') {
        header('Location: inicio');
        exit;
    }

    (new SancionarController())->Eliminar();
}); 
Router::add('POST','/eliminarReservados', function (){
    if (!isset($_SESSION['rol_usuario']) || $_SESSION['rol_usuario'] !== 'bibliotecario') {
        header('Location: inicio');
        exit;
    }
    (new LibrosController())->eliminarReservados();
});
Router::add('GET','/mostrarReservados', function (){
    if (!isset($_SESSION['rol_usuario']) || $_SESSION['rol_usuario'] !== 'bibliotecario') {
        header('Location: inicio');
        exit;
    }
    (new LibrosController())->listadoCompletoReservas();
});   

Router::add('GET','/devolver', function (){

    (new UsuarioController())->login();});   

Router::add('POST','/prestar', function (){
    if (!isset($_SESSION['rol_usuario']) || $_SESSION['rol_usuario'] !== 'bibliotecario') {
        header('Location: inicio');
        exit;
    }
    (new LibrosController())->prestar();
});

Router::add('POST','/prestarReservado', function (){
    if (!isset($_SESSION['rol_usuario']) || $_SESSION['rol_usuario'] !== 'bibliotecario') {
        header('Location: inicio');
        exit;
    }
    (new LibrosController())->prestarReservado();
});

Router::add('POST','/reservar', function (){

    (new LibrosController())->reservar();
});

Router::add('POST','/crearSancion', function (){
    if (!isset($_SESSION['rol_usuario']) || $_SESSION['rol_usuario'] !== 'bibliotecario') {
        header('Location: inicio');
        exit;
    }
    (new SancionarController())->crearSancion();
});

Router::add('GET','/mostrarFormularioLibro', function (){
    if (!isset($_SESSION['rol_usuario']) || $_SESSION['rol_usuario'] !== 'bibliotecario') {
        header('Location: inicio');
        exit;
    }
    (new LibrosController())->mostrarFormularioLibro();
});

Router::add('POST','/insertarLibro', function (){
    if (!isset($_SESSION['rol_usuario']) || $_SESSION['rol_usuario'] !== 'bibliotecario') {
        header('Location: inicio');
        exit;
    }
    (new LibrosController())->insertarLibro();
});

Router::add('GET','/librosDevueltos', function (){
    if (!isset($_SESSION['rol_usuario']) || $_SESSION['rol_usuario'] !== 'bibliotecario') {
        header('Location: inicio');
        exit;
    }
    (new LibrosController())->librosDevueltos();
});

Router::add('GET','/pendienteSancion', function (){
    if (!isset($_SESSION['rol_usuario']) || $_SESSION['rol_usuario'] !== 'bibliotecario') {
        header('Location: inicio');
        exit;
    }
    (new SancionarController())->pendienteSancion();
});

Router::dispatch();

?>








