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

    /* Estilos para select */
    select {
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
        width: 200px; 
        margin-right: 10px; 
    }
     /* Estilos para select */
     .custom-select-container {
        position: relative;
        display: inline-block;
        width: 200px; 
    }
    

    .custom-select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
        width: 100%;
        cursor: pointer;
        background-color: #fff;
    }

    .custom-select-icon {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        pointer-events: none;
    }

    /* Estilo para la flecha del select */
    .custom-select-icon::after {
        content: '\25BC'; /* Unicode para la flecha hacia abajo */
    }

    /* Estilos para table */
    .custom-table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #ccc;
    }

    .custom-table th,
    .custom-table td {
        padding: 8px;
        border: 1px solid #ccc;
        text-align: center;
    }

    .custom-table th {
        background-color: #007bff;
        color: white;
    }

    .custom-table tbody tr:nth-child(even) {
        background-color: #f1f1f1;
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

<form method="POST" action="prestar">
    <div class="caja1">
        <label for="usuario" class="select-label">Usuarios</label>
        <div class="custom-select-container">
            <select id="usuario" name="usuario" class="custom-select">
                <?php foreach($usuarios as $usuario): ?>
                    <option value="<?=$usuario['id'] ?>"><?=$usuario['nombre'].' '.$usuario['apellidos'] ?></option>
                <?php endforeach; ?>
            </select>
            <div class="custom-select-icon"></div>
        </div>

        <label for="libro" class="select-label">Listado de libros</label>
        <div class="custom-select-container">
            <select id="libro" name="libro" class="custom-select">
                <?php foreach($libros as $libro): ?>
                    <option value="<?=$libro['id'] ?>"><?=$libro['titulo']?></option>
                <?php endforeach; ?>
            </select>
            <div class="custom-select-icon"></div>
        </div>

        <button type="submit" name="reservar" id="reservar" class="btn btn-primary">Prestar</button>
    </div>
</form>

<div class="caja2">
    <table class="custom-table">
        <thead>
            <tr>
                <!-- <th>Numero Socio</th> -->
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($reservados as $fila):?>
                <tr>
                    <!-- <td><?php //echo $fila["socio"]?></td> -->
                    <td><?php echo $fila["nombre"]?></td>
                    <td><?php echo $fila["apellidos"]?></td>
                    <td><?php echo $fila["titulo"]?></td>
                    <td><?php echo $fila["autor"]?></td>
                    <td><?php echo $fila["editorial"]?></td>
                    <td>
                        <form action="prestarReservado" method="post">
                            <button type="submit"  name="id_reserva" value="<?= $fila["id_reserva"]; ?>" class="btn btn-primary">Prestar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>