<!-- iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- Agregar enlaces a los archivos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        /* CSS */
        body {
            background-color: #f8f9fa; 
            font-family: 'Arial', sans-serif;
        }

        .caja1 {
            display: flex;
            justify-content: left;
        }

        .caja2 {
            display: flex;
            justify-content: center;
        }

        img {
            width: 100vh;
            height: 93vh;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
            background-color: #4dc1ff;
            /* text-align: center; */
        }

        th, td {
            padding: 5px;
        }

        a:visited {
            text-decoration: none;
            color: black;
        }

        .cerrar {
            display: flex;
            justify-content: end;
        }

        /*menu*/
        .navbar-custom {
            background-color: white; 
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1); 
        }

        .navbar-custom .navbar-brand, .navbar-custom .navbar-text {
            color: #ffffff; 
        }

        .navbar-custom .navbar-nav .nav-link {
            color: #00324d; 
            transition: color 0.3s; 
        }

        .navbar-custom .navbar-nav .nav-link:hover {
            color: #00aaff; 
        }

        .navbar-custom .navbar-toggler-icon {
            background-color: #ecf0f1; 
        }

        .navbar-custom .navbar-toggler {
            border-color: #ecf0f1; 
        }

        .navbar-custom .navbar-toggler:hover, .navbar-custom .navbar-toggler:focus {
            background-color: #3498db; 
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .carousel-title {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .carousel-button {
            font-size: 1.5rem;
            padding: 0.75rem 1.5rem;
        }

        /* Estilos para el enlace de Cerrar sesión */
        .cerrar-session a {
            font-weight: bold;
            color: #e74c3c; 
        }

        @media (max-width: 768px) {
            img {
                width: 100%;
                height: auto;
            }

            .carousel-title {
                font-size: 1.5rem;
            }

            .carousel-button {
                font-size: 1rem;
                padding: 0.5rem 1rem;
            }

            .carousel-caption {
                top: 60%;
            }
        }
    </style>
</head>
<body>
<div>
    <!-- ESTE MENÚ ES SOLO PARA LECTOR -->
    <?php session_start(); ?>
    <div class="menu2">
        <?php if ($_SESSION['rol_usuario'] == 'lectores'): ?>
            <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
                <a class="nav-link" href="home"><i class="fas fa-book fa-3x" style="color: #3498db;"></i></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-5">
                        <li class="nav-item active">
                            <a class="nav-link" href="inicioinicio">Inicio</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="listadoCompleto">Libros</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="horario">Horarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="eventos">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="actividades">Club de Lectura</a>
                        </li>
                        <li class="nav-item cerrar-session">
                            <a class="nav-link" href="logout">
                                <div class="ml-auto">
                                    Cerrar sesión
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        <?php endif; ?>
    </div>

    <!-- ESTE MENÚ ES SOLO PARA BIBLIOTECARIO -->
    <div class="menu">
        <?php if ($_SESSION['rol_usuario'] == 'bibliotecario'): ?>
            <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
                <a class="nav-link" href="home"><i class="fas fa-book fa-3x" style="color: #3498db;"></i></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-5">
                        <li class="nav-item active">
                            <a class="nav-link" href="inicioinicio">Inicio</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="listadoCompleto">Libros</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="mostrarPrestar">Prestar Libro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mostrarReservados">Devolver Libro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sancionar">Sancionar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="librosDevueltos">Libros Devuelto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pendienteSancion">Pendiente Sanción</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mostrarFormularioLibro">Insertar Libros</a>
                        </li>
                        <li class="nav-item cerrar-session">
                            <a class="nav-link" href="logout">
                                <div class="ml-auto">
                                    Cerrar sesión
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        <?php endif; ?>
    </div>
</div>

<br><br><br>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleFade" data-slide-to="1"></li>
        <li data-target="#carouselExampleFade" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="foto d-block w-100" src="../images/fotob2.jpg" alt="Primera Casa">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <h5 class="carousel-title">Recursos para profesionales de la información y opositores</h5>
                <a class="btn btn-primary mt-3 carousel-button" href="listadoCompleto">Ver Libros</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="foto d-block w-100" src="../images/ruleta2.jpg" alt="Segunda Casa">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <h5 class="carousel-title">Para todo tipo de usuarios</h5>
                <a class="btn btn-primary mt-3 carousel-button" href="listadoCompleto">Ver Libros</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="foto d-block w-100" src="../images/libreria.jpg" alt="Tercera Casa">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <h5 class="carousel-title">Formación de usuarios</h5>
                <a class="btn btn-primary mt-3 carousel-button" href="listadoCompleto">Ver Libros</a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>