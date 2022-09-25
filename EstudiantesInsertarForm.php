<!DOCTYPE html>
<html>
<head>
    <title>Estudiantes Insertar</title>
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
      <h1 align="center">Nuevo Estudiantes</small></h1>
    </div>
    <div>
    <form class="form-horizontal" role="form" action= "EstudiantesInsertar.php" method="POST">
        <div class="form-group">
                <label for="carne" class="col-lg-2 control-label">N° Carné</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" placeholder="Ingrese N° Carné" name="carne">
                </div>
        </div>

        <div class="form-group">
                <label for="nombres" class="col-lg-2 control-label">Nombres</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" placeholder="Ingrese Nombres" name="nombres">
                </div>
        </div>

        <div class="form-group">
                <label for="apellidos" class="col-lg-2 control-label">Apellidos</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" placeholder="Ingrese Apellidos" name="apellidos">
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
