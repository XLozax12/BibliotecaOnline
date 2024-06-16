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
    
    .container {
        margin-top: 80px;
    }
    
    .table thead th {
        background-color: #007bff;
        color: white;
        text-align: center;
    }
    
    .table tbody td {
        text-align: center;
    }
    
    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
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
    
    .header {
        text-align: center;
        margin-bottom: 30px;
    }
    
    .header h1 {
        color: #007bff;
    }
    
    img {
        width: 80px;
        height: 80px;
    }
    
    a:visited {
        text-decoration: none;
        color:black;
    }
    
    .cerrar {
        display: flex;
        justify-content: end;
    }
    
    /* Menú */
    
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
  <div>
        <!-- Menús de navegación para lector y bibliotecario -->
        <div>
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
                                <li class="nav-item active"><a class="nav-link" href="inicioinicio">Inicio</a></li>
                                <li class="nav-item active"><a class="nav-link" href="listadoCompleto">Libros</a></li>
                                <li class="nav-item"><a class="nav-link" href="horario">Horarios</a></li>
                                <li class="nav-item"><a class="nav-link" href="eventos">Eventos</a></li>
                                <li class="nav-item"><a class="nav-link" href="actividades">Club de Lectura</a></li>
                                <li class="nav-item cerrar-session"><a class="nav-link" href="logout"><div class="ml-auto">Cerrar sesión</div></a></li>
                            </ul>
                        </div>
                    </nav>
                <?php endif; ?>
            </div>


<!-- ESTE MENÚ ES SOLO PARA BIBLIOTECARIO -->

  < <div class="menu">
                <?php if($_SESSION['rol_usuario'] == 'bibliotecario'): ?>
                    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
                        <a class="nav-link" href="home"><i class="fas fa-book fa-3x" style="color: #3498db;"></i> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-5">
                                <li class="nav-item active"><a class="nav-link" href="inicioinicio">Inicio</a></li>
                                <li class="nav-item active"><a class="nav-link" href="listadoCompleto">Libros</a></li>
                                <li class="nav-item active"><a class="nav-link" href="mostrarPrestar">Prestar Libro</a></li>
                                <li class="nav-item"><a class="nav-link" href="mostrarReservados">Devolver Libro</a></li>
                                <li class="nav-item"><a class="nav-link" href="sancionar">Sancionar</a></li>
                                <li class="nav-item"><a class="nav-link" href="librosDevueltos">Libros Devuelto</a></li>
                                <li class="nav-item"><a class="nav-link" href="pendienteSancion">Pendiente Sanción</a></li>
                                <li class="nav-item"><a class="nav-link" href="mostrarFormularioLibro">Insertar Libros</a></li>
                                <li class="nav-item cerrar-session"><a class="nav-link" href="logout"><div class="ml-auto">Cerrar sesión</div></a></li>
                            </ul>
                        </div>
                    </nav>
                <?php endif; ?>
            </div>
</div><br><br><br><br>


<div class="container">
            <div class="header">
              <!-- Listado de bibliotecario -->
                <h1>Listado de Libros</h1>
            </div>
            <?php if($_SESSION['rol_usuario'] == 'bibliotecario'): ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Editorial</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($libros as $fila): ?>
                            <tr>
                                <td><?php echo $fila["titulo"]; ?></td>
                                <td><?php echo $fila["autor"]; ?></td>
                                <td><?php echo $fila["editorial"]; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
              <!-- Listado Lectores  -->
            <?php if($_SESSION['rol_usuario'] == 'lectores'): ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Editorial</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($libros as $fila): ?>
                            <tr>
                                <td><?php echo $fila["titulo"]; ?></td>
                                <td><?php echo $fila["autor"]; ?></td>
                                <td><?php echo $fila["editorial"]; ?></td>
                                <td>
                                    <form action="reservar" method="post">
                                        <button type="submit" class="btn btn-custom" name="reservar" value="<?= $fila["id"]; ?>">Reservar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>


    
</body>
</html>    