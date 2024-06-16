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
    
    a:visited {
      text-decoration: none;
      color:black;
    }
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

    .schedule-card {
      margin-top: 5rem;
      padding: 2rem;
      background-color: white;
      border-radius: 0.5rem;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .schedule-title {
      font-size: 2rem;
      margin-bottom: 1rem;
      color: #00324d;
    }
    .schedule-details {
      font-size: 1.2rem;
      color: #555;
    }
    .library-info {
      margin-top: 2rem;
      font-size: 1rem;
      color: #666;
    }
    .faq-section {
      margin-top: 2rem;
      font-size: 1rem;
      color: #666;
    }
    .faq-title {
      font-size: 1.5rem;
      color: #00324d;
      margin-bottom: 1rem;
    }
    .contact-section {
      margin-top: 2rem;
      font-size: 1rem;
      color: #666;
    }
    .contact-title {
      font-size: 1.5rem;
      color: #00324d;
      margin-bottom: 1rem;
    }
    .map-section {
      margin-top: 2rem;
    }



    
        
    </style>
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
  <?php endif; ?><br><br>

   <!-- Contenido principal -->
  <div class="container">
    <div class="schedule-card">
      <h2 class="schedule-title">Horario de la Biblioteca</h2>
      <div class="schedule-details">
          <p><strong>Lunes a Viernes:</strong> 8:00 AM - 8:00 PM</p>
          <p><strong>Sábados:</strong> 9:00 AM - 5:00 PM</p>
          <p><strong>Domingos:</strong> Cerrado</p>
      </div>
      <div class="library-info">
          <p>Nuestra biblioteca ofrece una amplia gama de recursos, incluyendo libros, revistas, y acceso a bases de datos electrónicas. Además, contamos con áreas de estudio y salas de reuniones que puedes reservar.</p>
          <p>Para más información sobre nuestros servicios, eventos y actividades, visita nuestras otras secciones en la página web.</p>
          <p>Si tienes alguna pregunta, no dudes en ponerte en contacto con nosotros a través de nuestro correo electrónico o teléfono de contacto.</p>
      </div>
    </div>

    <div class="faq-section">
      <h3 class="faq-title">Preguntas Frecuentes</h3>
      <p><strong>¿Puedo reservar libros en línea?</strong> Sí, puedes reservar libros a través de nuestro catálogo en línea.</p>
      <p><strong>¿Hay actividades para niños?</strong> Sí, tenemos una variedad de actividades y talleres para niños. Visita nuestra sección de Ludoteca y Talleres para más detalles.</p>
      <p><strong>¿Ofrecen servicios de impresión?</strong> Sí, ofrecemos servicios de impresión y fotocopiado a bajo costo.</p>
    </div>

    <div class="contact-section">
      <h3 class="contact-title">Contacto</h3>
      <p><strong>Teléfono:</strong> 123-456-7890</p>
      <p><strong>Email:</strong> info@biblioteca.com</p>
      <p>O visítanos en nuestra dirección: Calle Falsa 123, Ciudad, País</p>
    </div>

    <div class="map-section">
      <h3 class="contact-title">Ubicación</h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30963.80235664647!2d-3.1414874396243457!3d37.29920420285991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd71c5a48b43c93b%3A0x4ce5a6e24b3e2a8!2sGuadix%2C%20Granada!5e0!3m2!1sen!2ses!4v1623543583925!5m2!1sen!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

  </div>
</div><br><br>






  