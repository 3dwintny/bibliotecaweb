<!DOCTYPE html>
<html>
<head>
    <title  >Listar Autores</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
</head>
<body>
<?php include 'index2.php';?>
<div class="container">
    <div class="page-header">
    <h1>Listado de Autores</h1>
    </div>
    <div class="table-responsive">
        <?php
            require_once('other\ClassAutor.php');
            $autor = new Autor();
            $dt= $autor->listar();
            ?>
            <table id="tablaAutor" class="table table-hover">
            <thead>
                <th>ID</th>
                <th >Nombres</th>
                <th >Apellidos</th>
                <th >Fecha_Nacimiento</th>
            </thead>
            <?php
            while ($row = mysqli_fetch_array($dt))
                {
                    echo '<tr>';
                    echo '<td>'.$row['id'].'</td>';
                    echo '<td>'.$row['Nombres'].'</td>';
                    echo '<td>'.$row['Apellidos'].'</td>';
                    echo '<td>'.$row['Nacimiento'].'</td>';
                    echo '</tr>';
                }
                ?>
            </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
    $('#tablaAutor').DataTable();
});</script>
</body>
</html>
