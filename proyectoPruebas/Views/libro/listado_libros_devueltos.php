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
  img{
      width: 80px;
      height: 80px;
  }
  /* Estilos para la tabla */
  .caja1 table {
      width: 100%;
      border-collapse: collapse;
  }

  .caja1 th,
  .caja1 td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd; 
  }

  .caja1 th {
      background-color: #007bff; 
      color: #fff;
  }

  .caja1 tr:hover {
      background-color: #f5f5f5; 
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
</div><br><br><br><br>

<div class="caja1">
<table>
  <thead>
    <tr>
      <!-- <th>id</th> -->
      <!-- <th>Numero Socio</th> -->
      <th>Usuario</th>
      <th>Apellidos</th>
      <th>Libro</th>
      <th>Fecha</th>
      <th>Devolucion</th>
      
    </tr>
  </thead>
  
    <?php foreach($reserva as $fila):?> 
      <tr>
      <!-- <td><?php //echo $fila["id"]?></td> --> 
      <!-- <td><?php //echo $fila["numero_socio"]?></td> -->
      <td><?php echo $fila["nombre_usuario"]?></td>
      <td><?php echo $fila["apellidos"]?></td>
      <td><?php echo $fila["titulo"]?></td>
      <td><?php echo $fila["fecha"]?></td>
      <td><?php echo $fila["devolucion"] == 1 ? 'Si' : 'No'?></td>
      </tr>
    <?php endforeach; ?>
</table><br>

</form> 
<br>
</body>
</html>