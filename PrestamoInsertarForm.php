
<!DOCTYPE html>
<html>
<head>
    <title>Autor Insertar</title>
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
      <h1 align="center">Nuevo Prestamo</small></h1>
    </div>
    <div>
    <form class="form-horizontal" role="form" action= "PrestamoInsertar.php" method="POST">
        <div class="form-group">
                <div class="col-lg-10">
                    <input type="hidden" name="fecha_prestamo" value="<?php date_default_timezone_set('America/Guatemala'); echo date("Y-m-d");?>">
                </div>
        </div>
        <label style="margin-left: 0%;">
        <?php
            date_default_timezone_set('America/Guatemala');  
            echo "Fecha Prestamo  ".date("d-m-Y");
        ?>
        </label>
        <br/>
        <div class="form-group">
                <label for="fecha_devolucion" class="col-lg-2 control-label">Fecha Devolucion</label>
                <div class="col-lg-10">
                    <input type="date" name="fecha_devolucion" value="<?php echo date("Y-m-d");?>">
                </div>
        </div>
        <br/>
        <div class="form-group">
                <label for="prestamo" class="col-lg-2 control-label">Estudiante</label>
                <div class="col-lg-10">
                    <select class="form-select" aria-label="Default select example" name="sEstudiante">
                    <?php
                        require_once('./other/ClassPrestamo.php');
                        $prestante = new prestamo();
                        $dts= $prestante->listarEstudiante();  
                        while ($row = mysqli_fetch_array($dts))
                        {
                            $va = $row['id'];
                            echo "<option value=$va>".$row['id']." - ".$row['nombres']." ".$row['apellidos']."</option>";
                        }
                    ?>
                    </select>
                </div>
        </div>
        <br/>
        <div class="form-group">
                <label for="prestamo" class="col-lg-2 control-label">Libro</label>
                <div class="col-lg-10">
                    <select class="form-select" aria-label="Default select example" name="sLibro">$actualizar = "UPDATE libros SET Estado='No Disponible' WHERE ID=$estadoLibro";
                    <?php
                        require_once('./other/ClassPrestamo.php');
                        $prestante = new prestamo();
                        $dts= $prestante->listarLibro();  
                        while ($row = mysqli_fetch_array($dts))
                        {
                            $va = $row['id'];
                            echo "<option value=$va>".$row['di']." - ".$row['Titulo']."</option>";
                        }
                    ?>
                    </select>
                </div>
        </div>
        <br/>
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
