<!DOCTYPE html>
<html>
<head>
    <title>Listar Libros</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<body>
<?php include 'index2.php';?>
<div class="container">
    <div class="page-header">
      <h1>Listado de Libros </h1>
    </div>
    <div class="table-responsive">
        <?php
            require_once('other\ClassLibro.php');
            $libro = new Libro();
            $dt= $libro->listar();
            ?>
            <table id="tablaLibro" class="table table-hover">
            <thead>
                <th>ID</th>
                <th >Titulo</th>
                <th >Edicioin</th>
                <th >Id Autor</th>
                <th >Estado</th>
            </thead>
            <?php
            while ($row = mysqli_fetch_array($dt))
                {
                    echo '<tr>';
                    echo '<td>'.$row['id'].'</td>';
                    echo '<td>'.$row['Titulo'].'</td>';
                    echo '<td>'.$row['Edicion'].'</td>';
                    echo '<td>'.$row['id_Autor'].'</td>';
                    echo '<td>'.$row['estado'].'</td>';
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
    $('#tablaLibro').DataTable();
});</script>
</body>
</html>
