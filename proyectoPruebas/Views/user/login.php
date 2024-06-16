<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); /* Fondo con gradiente */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Arial', sans-serif;
            margin: 0;
        }
        .login-container {
            padding: 40px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            transition: box-shadow 0.3s ease-in-out;
        }
        .login-container:hover {
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.2);
        }
        .login-header {
            margin-bottom: 30px;
        }
        .login-header a {
            text-decoration: none;
            color: #333;
        }
        .login-header h1 {
            font-size: 24px;
            color: #333;
            position: relative;
        }
        .login-header h1::before {
            content: "\f02d"; /* Icono de libro */
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: -35px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 30px;
            color: #007bff;
        }
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        .form-group i {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #aaa;
        }
        .form-control {
            padding-left: 30px;
            transition: border-color 0.3s ease-in-out;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
        }
        .btn-custom:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
        .text-center a {
            color: #007bff;
            text-decoration: none;
        }
        .text-center a:hover {
            text-decoration: underline;
        }
        /* .error {
            background: red;
            color: white;
            padding: 5px;
            border-radius: 5px;
            margin-top: 10px;
        } */
    </style>
</head>
<body>
<div class="login-container">
    <div class="login-header text-center">
        <a href="inicio"><h1>Biblioteca </h1></a>
    </div>
    <form action="login" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <i class="fas fa-envelope"></i>
            <input type="text" class="form-control" id="email" name="email" pattern="^[a-zA-Z0-9._%+-]+@gmail\.com$" required>
            <div class="error">
                <?php
                // if($errores){
                //     echo $errores["error_email"];
                // }
                ?>
            </div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <i class="fas fa-lock"></i>
            <input type="password" class="form-control" id="password" name="password" required>
            <div class="error">
                <?php
                // if($errores){
                //     echo $errores["error_password"];
                // }
                ?>
            </div>
        </div>
        <button type="submit" class="btn btn-custom btn-block" name="insertar" id="insertar">Iniciar Sesión</button>
        <div class="text-center mt-3">
            <a href="registro">Registrarme</a>
        </div>
    </form>
</div>

<!-- Enlace a Bootstrap JS (opcional) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>