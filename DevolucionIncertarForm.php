<!DOCTYPE html>
<html>
<head>
    <title>Devolver Libro</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <link href="bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>
<?php
    include('index2.php');
?>
<div class="container">
    <div class="page-header">
      <h1>Devolver Libro</small></h1>
    </div>
    <div>
    <form class="form-horizontal" role="form"  action="DevolucionIncertar.php" method="POST">
        <div class="form-group">
                <label for="autor" class="col-lg-2 control-label">Listado de Préstamos</label>
                <div class="col-lg-10">
                    <select class="form-select" aria-label="Default select example" name="sPrestamos">
                    <?php
                        require_once('./other/ClassDevolucion.php');
                        $vuelta = new devolucion();
                        $dt= $vuelta->listarPrestamo();  
                        while ($row = mysqli_fetch_array($dt))
                        {
                            $va = $row['id'];
                            echo "<option value=$va>".$row['id']."</option>";
                        }
                    ?>
                    </select>
                </div>
        </div>
        <div class="form-group">
                <label for="fecha" class="col-lg-2 control-label">Fecha Devolucion</label>
                <div class="col-lg-10">
                    <input type="date" name="fecha" value="<?php echo date("Y-m-d");?>">
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