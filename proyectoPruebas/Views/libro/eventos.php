<!-- iconos-->
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
    /*eventos*/ 
    .event-card {
        margin-bottom: 30px;
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s;
    }

    .event-card:hover {
        transform: scale(1.05);
    }

    .event-image {
        height: 200px;
        object-fit: cover;
    }

    .event-body {
        padding: 20px;
    }

    .event-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #00324d;
    }

    .event-date {
        color: #999;
         margin-bottom: 10px;
    }

    .event-description {
        margin-bottom: 15px;
    }

    .event-button {
        background-color: #00aaff;
        color: white;
        border: none;
        border-radius: 20px;
        padding: 10px 20px;
        transition: background-color 0.3s;
    }

    .event-button:hover {
        background-color: #007acc;
    }

    .event-content {
        padding: 15px;
        border-top: 1px solid #ddd;
        background-color: #f8f8f8;
        display: none;
    }

    .event-content p {
        margin-bottom: 10px;
    }
    /*cerrar*/ 
    .cerrar{
      display: flex;
	justify-content: end;
    }

    /*menu*/
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
    /* Estilos para el enlace de Cerrar sesión */
    .cerrar-session a {
      font-weight: bold;
      color: #e74c3c; 
    }



    
        
    </style>
    <script>
      // Funcion que hace que cargue mas informacion
        function toggleContent(eventId) {
            var content = document.getElementById(eventId);
            if (content.style.display === "none" || content.style.display === "") {
                content.style.display = "block";
            } else {
                content.style.display = "none";
            }
        }
    </script>
</head>
<body>
<div>
  <!-- ESTE MENÚ ES SOLO PARA LECTOR -->
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
  <?php endif; ?>

    <!-- Sección de Eventos -->
    <div class="container mt-5 pt-5">
        <h2 class="text-center mb-5">Próximos Eventos</h2>
        <div class="row">
            <div class="col-12 col-md-4 ">
                <div class="card event-card">
                    <img src="../images/clubdelectura.jpg" class="card-img-top event-image" alt="Evento 1">
                    <div class="card-body event-body">
                        <h5 class="card-title event-title">Club de Lectura: Clásicas </h5>
                        <p class="event-date"><i class="far fa-calendar-alt"></i> 29 de Junio, 2024</p>
                        <p class="card-text event-description">Únete a nuestro club de lectura para discutir las grandes obras de la literatura clásica. ¡No te lo pierdas!</p>
                        <button class="btn event-button" onclick="toggleContent('event1')">Más Información</button>
                        <div class="event-content" id="event1">
                            <p>Este mes estaremos discutiendo "Don Quijote de la Mancha" de Miguel de Cervantes. La sesión incluirá un análisis profundo de los temas y personajes, seguido de una discusión abierta.</p>
                            <p>Fechas de las reuniones:</p>
                            <ul>
                                <li>Primera sesión: 5 de Junio</li>
                                <li>Segunda sesión: 12 de Junio</li>
                                <li>Tercera sesión: 19 de Junio</li>
                            </ul>
                            <p>¡Trae tu copia del libro y únete a la conversación!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card event-card">
                    <img src="../images/escrituracreativa.png" class="card-img-top event-image" alt="Evento 2">
                    <div class="card-body event-body">
                        <h5 class="card-title event-title">Taller de Escritura Creativa</h5>
                        <p class="event-date"><i class="far fa-calendar-alt"></i> 23 de Junio, 2024</p>
                        <p class="card-text event-description">Aprende técnicas de escritura creativa con nuestro taller especial. Ideal para escritores en potencia.</p>
                        <button class="btn event-button" onclick="toggleContent('event2')">Más Información</button>
                        <div class="event-content" id="event2">
                            <p>Este taller cubrirá los fundamentos de la escritura creativa, incluyendo la creación de personajes, la trama y el desarrollo del escenario.</p>
                            <p>Fechas del taller:</p>
                            <ul>
                                <li>12 de Junio: Introducción a la escritura creativa</li>
                                <li>19 de Junio: Desarrollo de personajes</li>
                                <li>26 de Junio: Creación de tramas efectivas</li>
                            </ul>
                            <p>Los participantes tendrán la oportunidad de compartir sus trabajos y recibir retroalimentación constructiva.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card event-card">
                    <img src="../images/cuentacuentos.jpg" class="card-img-top event-image" alt="Evento 3">
                    <div class="card-body event-body">
                        <h5 class="card-title event-title">Cuentacuento para Niños</h5>
                        <p class="event-date"><i class="far fa-calendar-alt"></i> 29 de Junio, 2024</p>
                        <p class="card-text event-description">Una tarde mágica de cuentos para los más pequeños. Ven con tus hijos y disfruten juntos de historias fascinantes.</p>
                        <button class="btn event-button" onclick="toggleContent('event3')">Más Información</button>
                        <div class="event-content" id="event3">
                            <p>Nuestro cuentacuentos profesional narrará historias encantadoras que capturarán la imaginación de los niños.</p>
                            <p>Programa del evento:</p>
                            <ul>
                                <li>19 de Junio: Historias de animales</li>
                                <li>26 de Junio: Cuentos de aventuras</li>
                                <li>3 de Julio: Fábulas y leyendas</li>
                            </ul>
                            <p>Este evento es gratuito y abierto a niños de todas las edades. ¡No te lo pierdas!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br>
        <!-- Nuevos eventos -->
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card event-card">
                    <img src="../images/cine.jpg" class="card-img-top event-image" alt="Evento 4">
                    <div class="card-body event-body">
                        <h5 class="card-title event-title">Cine en la Biblioteca</h5>
                        <p class="event-date"><i class="far fa-calendar-alt"></i> 25 de Junio, 2024</p>
                        <p class="card-text event-description">Disfruta de una tarde de cine con clásicos seleccionados especialmente para nuestros visitantes. ¡No te lo pierdas!</p>
                        <button class="btn event-button" onclick="toggleContent('event4')">Más Información</button>
                        <div class="event-content" id="event4">
                            <p>Proyectaremos películas clásicas que han marcado la historia del cine. Ven a disfrutar y comentar tus escenas favoritas.</p>
                            <p>Programa de proyección:</p>
                            <ul>
                                <li>25 de Junio: "Casablanca"</li>
                                <li>2 de Julio: "Lo que el viento se llevó"</li>
                                <li>9 de Julio: "Ciudadano Kane"</li>
                            </ul>
                            <p>Entrada gratuita y abierta a todo el público. ¡Te esperamos!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card event-card">
                    <img src="../images/ilustracion.jpg" class="card-img-top event-image" alt="Evento 5">
                    <div class="card-body event-body">
                        <h5 class="card-title event-title">Taller de Ilustración</h5>
                        <p class="event-date"><i class="far fa-calendar-alt"></i> 30 de Junio, 2024</p>
                        <p class="card-text event-description">Desarrolla tus habilidades artísticas en nuestro taller de ilustración. Ideal para principiantes y aficionados.</p>
                        <button class="btn event-button" onclick="toggleContent('event5')">Más Información</button>
                        <div class="event-content" id="event5">
                            <p>Aprenderás técnicas básicas y avanzadas de ilustración con la guía de un instructor experimentado.</p>
                            <p>Fechas del taller:</p>
                            <ul>
                                <li>30 de Junio: Introducción a la ilustración</li>
                                <li>7 de Julio: Técnicas de sombreado y luz</li>
                                <li>14 de Julio: Creación de personajes</li>
                            </ul>
                            <p>Materiales incluidos en el taller. ¡No te lo pierdas!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card event-card">
                    <img src="../images/autor.jpg" class="card-img-top event-image" alt="Evento 6">
                    <div class="card-body event-body">
                        <h5 class="card-title event-title">Charlas de Autor</h5>
                        <p class="event-date"><i class="far fa-calendar-alt"></i> 5 de Agosto, 2024</p>
                        <p class="card-text event-description">Conoce a tus autores favoritos y escucha sus historias y procesos creativos en nuestras charlas de nuestros autores.</p>
                        <button class="btn event-button" onclick="toggleContent('event6')">Más Información</button>
                        <div class="event-content" id="event6">
                            <p>Este mes contamos con la presencia de tres autores destacados que compartirán sus experiencias y responderán tus preguntas.</p>
                            <p>Calendario de charlas:</p>
                            <ul>
                                <li>5 de Julio: María Pérez - "El arte de escribir ficción"</li>
                                <li>12 de Julio: Juan López - "La importancia de la narrativa histórica"</li>
                                <li>19 de Julio: Ana González - "Construcción de mundos en la fantasía"</li>
                            </ul>
                            <p>Sesiones de firma de libros disponibles al final de cada charla. ¡No te lo pierdas!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>