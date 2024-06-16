 <!-- Iconos -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- Bootstrap 4.5.2 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; 
            font-family: 'Arial', sans-serif;
        }

        .image-container {
            display: flex;
            gap: 10px;
            padding: 10px;
        }

        .lore-image,
        .emperatriz-image {
            width: 32%;
            height: auto;
            object-fit: contain;
            max-height: 100%;
            margin: 0;
        }

        #features {
            background-color: #f8f9fa;
            padding-top: 80px;
            padding-bottom: 80px;
        }

        #features .row {
            display: flex;
            justify-content: space-between;
            align-items: stretch;
        }

        #features .col-md-4 {
            text-align: center;
            margin-bottom: 20px;
        }

        #features h5 {
            color: #007bff;
            margin-bottom: 20px;
        }

        #features p {
            font-size: 16px;
            line-height: 1.6;
        }

        #features ul {
            list-style-type: none;
            padding: 0;
        }

        #features ul li:before {
            content: '\2022';
            color: #007bff;
            font-size: 18px;
            margin-right: 8px;
        }
        .display-5 {
          font-size: 2em; 
    }

        .cerrar {
            display: flex;
            justify-content: end;
        }

        .navbar-custom {
            background-color: white; 
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1); 
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
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

        .navbar-custom .navbar-toggler:hover,
        .navbar-custom .navbar-toggler:focus {
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

        .cerrar-session a {
            font-weight: bold;
            color: #e74c3c; 
        }
    </style>
   <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Obtener el botón y el contenedor de información adicional
        const toggleButton = document.querySelector('.toggle-info');
        const moreInfo = document.querySelector('.more-info');

        // Agregar evento de clic al botón
        toggleButton.addEventListener('click', function() {
            // Alternar la visibilidad del contenedor de información adicional
            moreInfo.classList.toggle('d-none');
            
            // Cambiar el texto del botón entre 'Más información' y 'Menos información'
            if (toggleButton.textContent === 'ÚNETE AHORA') {
                toggleButton.textContent = 'Menos información';
            } else {
                toggleButton.textContent = 'ÚNETE AHORA';
            }
        });

        // Ocultar el contenido adicional al cargar la página
        moreInfo.classList.add('d-none');
    });

</script>

</script>
</head>
<body>
    <div>
        <!-- MENÚ PARA LECTOR -->
        <?php session_start(); ?>
        <div class="menu2">
            <?php if($_SESSION['rol_usuario'] == 'lectores'): ?>
            <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
                <a class="nav-link" href="home"><i class="fas fa-book fa-3x" style="color: #3498db;"></i> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link" href="horario">Horarios</span></a>
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
        </div>
        <?php endif; ?><br><br>

        <!-- Header -->
        <header class="header">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-6"><br><br>
                <div class="image-container">
                    <img src="../images/clublectura.png" alt="Club de la Lectura" class="img-fluid book-image">
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-container"><br><br><br><br>
                    <h1 class="display-3">Club de la Lectura</h1>
                    <p class="lead text-secondary">
                        Únete a nuestro Club de la Lectura y comparte tu pasión por los libros con otros lectores.
                    </p>
                    <div class="more-info">
                        <p>Para unirte al Club de la Lectura, puedes contactarnos a través de nuestro correo electrónico o teléfono:</p>
                        <p><strong>Correo electrónico:</strong> info@clublectura.com</p>
                        <p><strong>Teléfono:</strong> +34 123 456 789</p>
                    </div>
                    <button class="btn btn-outline-secondary text-uppercase toggle-info">ÚNETE AHORA</button>
                </div>
            </div>
        </div>
    </div>
</header>

       <!-- Sección de Libros Recomendados -->
<section class="testimonial bg-light text-secondary p-5">
    <div class="container">
        <p class="display-5 text-center">
            Libros Recomendados<br>
            Lecturas Populares entre Nuestros Miembros
        </p>
        <div class="image-container mb-5 px-4 text-center">
            <img src="../images/" alt="" class="img-fluid book-image rotate-up mx-2"/>
            <img src="" alt="" class="img-fluid book-image rotate-up mx-2"/>
            <img src="" alt="" class="img-fluid book-image rotate-up mx-2"/>
        </div>
    </div>
</section>

        <!-- Features -->
<div id="features" class="py-5">
    <div class="container">
        <div class="row g-5 py-5">
            <div class="col-md-4">
                <div class="text-center mb-4">
                    <img src="../images/intercambiar.png" alt="" class="img-fluid mb-3"/>
                    <h5 class="fw-bold">Intercambio de Libros</h5>
                </div>
                <p class="text-muted">
                    Facilita el intercambio de libros entre los miembros del club:
                    <ul>
                        <li>Fácil sistema de filtrado y clasificación de libros</li>
                        <li>Descripción detallada de cada libro</li>
                        <li>Interfaz intuitiva para gestionar tus libros</li>
                    </ul>
                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center mb-4">
                    <img src="../images/nose2.jpg" alt="" class="img-fluid mb-3"/>
                    <h5 class="fw-bold">Eventos de Lectura</h5>
                </div>
                <p class="text-muted">
                    Participa en eventos y discusiones de libros organizados por el club. Además:
                    <ul>
                        <li>Descuentos en eventos especiales</li>
                        <li>Acceso a meetups y tertulias literarias</li>
                    </ul>
                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center mb-4">
                    <img src="../images/seguridad.jpg" alt="" class="img-fluid mb-3"/>
                    <h5 class="fw-bold">Cuenta Personal</h5>
                </div>
                <p class="text-muted">
                    Gestión avanzada de tu cuenta personal con múltiples secciones mejoradas:
                    <ul>
                        <li>Protección de cuenta y seguridad</li>
                        <li>Notificaciones de eventos y novedades</li>
                        <li>Histórico de libros leídos y compartidos</li>
                    </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- faq -->
        <div class="container my-5">
            <h2 class="text-center mb-4">Preguntas Frecuentes</h2>
            <div class="accordion" id="faqAccordion">
                <!-- Pregunta 1 -->
                <div class="card">
                    <div class="card-header" id="question1">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#answer1" aria-expanded="true" aria-controls="answer1">
                                ¿Cómo puedo unirme al Club de la Lectura?
                            </button>
                        </h2>
                    </div>
                    <div id="answer1" class="collapse " aria-labelledby="question1" data-parent="#faqAccordion">
                        <div class="card-body">
                            Para unirte al Club de la Lectura, simplemente crea una cuenta en nuestro sitio web y sigue las instrucciones en tu panel de usuario.
                        </div>
                    </div>
                </div>
                <!-- Pregunta 2 -->
                <div class="card">
                    <div class="card-header" id="question2">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#answer2" aria-expanded="false" aria-controls="answer2">
                                ¿Cuánto tiempo tarda en completarse un intercambio de libros?
                            </button>
                        </h2>
                    </div>
                    <div id="answer2" class="collapse" aria-labelledby="question2" data-parent="#faqAccordion">
                        <div class="card-body">
                            El tiempo de procesamiento de un intercambio de libros depende de varios factores, como la disponibilidad del miembro con el que estás intercambiando. Generalmente, intentamos completar los intercambios lo más rápido posible.
                        </div>
                    </div>
                </div>
                <!-- Pregunta 3 -->
                <div class="card">
                    <div class="card-header" id="question3">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#answer3" aria-expanded="false" aria-controls="answer3">
                                ¿Hay alguna tarifa por utilizar el servicio de intercambio de libros?
                            </button>
                        </h2>
                    </div>
                    <div id="answer3" class="collapse" aria-labelledby="question3" data-parent="#faqAccordion">
                        <div class="card-body">
                            No, nuestro servicio de intercambio de libros es gratuito. No hay tarifas ocultas ni comisiones adicionales.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>