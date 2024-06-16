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
      background: linear-gradient(to right, #6a11cb, #2575fc); 
        font-family: 'Arial', sans-serif;
        color: #ffffff;
    }
    .form-container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        color: #007bff;
    }

    .form-container h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #007bff;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-group input {
        border: 2px solid #007bff;
        border-radius: 5px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #2575fc;
    }

    .error {
        color: red;
        font-size: 0.9em;
    }

    .success {
        color: green;
        font-size: 1em;
    }
    img{
      width: 80px;
      height: 80px;
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
    /* Estilos para el enlace de Cerrar sesión */
    .cerrar-session a {
        font-weight: bold;
        color: #e74c3c; 
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
  <?php endif; ?>


<!-- ESTE MENÚ ES SOLO PARA BIBLIOTECARIO -->

  <div class="menu">
  <?php if($_SESSION['rol_usuario'] == 'bibliotecario'): ?>
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
        <a class="nav-link" href="mostrarPrestar">Prestar Libro <span class="sr-only">(actual)</span></a>
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
  </div>
  <?php endif; ?>
</div><br><br><br><br><br><br><br><br>

<div class="form-container">
    <h1>Insertar Libro</h1>
    <form action="insertarLibro" method="post">
        <div class="form-group">
            <label for="titulo"><i class="fas fa-book"></i> Título</label>
            <input type="text" class="form-control" name="titulo" id="titulo" pattern="[A-Za-z\s]+" title="Solo se permiten letras y espacios" minlength="3" required>
            <div class="error">
                <?php /*if(isset($errores)) { echo $errores["error_titulo"]; }*/ ?>
            </div>
        </div>
        <div class="form-group">
            <label for="autor"><i class="fas fa-user"></i> Autor</label>
            <input type="text" class="form-control" name="autor" id="autor" pattern="[A-Za-z\s]+" title="Solo se permiten letras y espacios" minlength="3" required>
            <div class="error">
                <?php /*if(isset($errores)) { echo $errores["error_autor"]; }*/ ?>
            </div>
        </div>
        <div class="form-group">
            <label for="editorial"><i class="fas fa-building"></i> Editorial</label>
            <input type="text" class="form-control" name="editorial" id="editorial" pattern="[A-Za-z\s]+" title="Solo se permiten letras y espacios" minlength="2" required>
            <div class="error">
                <?php /*if(isset($errores)) { echo $errores["error_editorial"]; }*/ ?>
            </div>
        </div>
        <div class="form-group">
            <label for="cantidad"><i class="fas fa-layer-group"></i> Cantidad</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad" required>
            <div class="error">
                <?php /*if(isset($errores)) { echo $errores["error_cantidad"]; }*/ ?>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="insertar" id="insertar"><i class="fas fa-plus-circle"></i> Insertar Libro</button>
    </form>
</div>