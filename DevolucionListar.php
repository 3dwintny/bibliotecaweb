<!DOCTYPE html>
<html>
<head>
    <title>Listar Estudiantes</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
</head>
<body>
    <?php
        include('index2.php');
    ?>
<div class="container">
    <div class="page-header">
      <h1>Listado de Devoluciones</h1>
    </div>
    <div>
            <?php       
            require_once('./other/ClassDevolucion.php');
            $dev = new devolucion();
            $dt= $dev->listar();  
            ?>
            <table id="tablaDevolucion" class="table table-striped">
            <thead>
                <th>ID</th>
                <th>ID Prestamo</th>
                <th>Fecha</th>
            </thead>
            <?php
            while ($row = mysqli_fetch_array($dt))
                {
                    echo '<tbody>';
                    echo '<td>'.$row['id'].'</td>';
                    echo '<td>'.$row['id_prestamo'].'</td>';
                    echo '<td>'.$row['fecha'].'</td>';
                    echo '</tbody>';
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
    $('#tablaDevolucion').DataTable();
});</script>
</body>
</html>
