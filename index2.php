<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <title>Inicio</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: hsl(200, 54%, 12%)">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">BIBLIOTECA</a>
    <button class="navbar-toggler  btn btn-outline-success me-2 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle text-light " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Autor
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: hsl(200, 54%, 12%)" >
            <li><a class="dropdown-item   text-light " href="Autorinsertarform.php">Nuevo</a></li>
            <li><a class="dropdown-item text-light  " href="AutorListar.php">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Libro
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: hsl(200, 54%, 12%)">
          <li><a class="dropdown-item text-light " href="LibroinsertarForm.php">Nuevo</a></li>
            <li><a class="dropdown-item text-light " href="LibroListar.php">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Estudiantes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: hsl(200, 54%, 12%)">
          <li><a class="dropdown-item text-light " href="EstudiantesInsertarForm.php">Nuevo</a></li>
            <li><a class="dropdown-item text-light " href="EstudiantesListar.php">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Prestamos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: hsl(200, 54%, 12%)">
          <li><a class="dropdown-item text-light " href="PrestamoInsertarForm.php">Nuevo</a></li>
            <li><a class="dropdown-item text-light " href="PrestamoListar.php">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Devoluciones
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: hsl(200, 54%, 12%)">
          <li><a class="dropdown-item text-light " href="DevolucionIncertarForm.php">Nuevo</a></li>
            <li><a class="dropdown-item text-light " href="DevolucionListar.php">Listar</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Pie de página -->


<!-- Librería jQuery requerida por los plugins de JavaScript -->
<script src="http://code.jquery.com/jquery.js"></script>

<!-- Todos los plugins JavaScript de Bootstrap (también puedes
     incluir archivos JavaScript individuales de los únicos
     plugins que utilices) -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>