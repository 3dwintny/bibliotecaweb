<!DOCTYPE html>
<html>
<head>
    <title>Libor Insertar</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <link rel="stylesheet" type="" href="css/stylesheet.css">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
</head>

<body>
<?php include 'index2.php';?>
<div class="container">
    <div class="page-header">
      <h1  align="center" >Nuevo Libro</small></h1>
    </div>
    <div>
    <form class="form-horizontal" role="form" action= "Libroinsertar.php" method="POST">
        <div class="form-group">
                <label for="titulo" class="col-lg-2 control-label">Titulo</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" placeholder="Ingrese Titulo" name="titulo">
                </div>
        </div>

        <div class="form-group">
                <label for="apellidos" class="col-lg-2 control-label">Edicion</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" placeholder="Ingrese Edicion" name="edicion">
                </div>
        </div>

        <div class="form-group">
                <label for="fecha_nac" class="col-lg-2 control-label">Id-Autor</label>
                <div class="col-lg-10">
                    <input class="form-control" type="number" placeholder="Ingrese el id del Autor" name="id_autor">
                </div>
        </div>

        <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-warning">Agregar</button>
                </div>
        </div>

    </form>
    </div>
</div>
</body>
</html>
