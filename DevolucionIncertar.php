<html>
    <head>
        <title>Insertar Devolucion</title>
    </head>
    <body>
    <?php
    require_once('other\ClassDevolucion.php');
            $id_prestamo = $_POST['sPrestamos'];
            $fecha= $_POST['fecha'];


            $datos = array(
                'id_prestamo'=>$id_prestamo,
                'fecha'=>$fecha);
            $au = new Devolucion();
            $au->insertar($datos);
            $au->actualizarPrestamo();
            $au->actualizarLibro();
    ?>
    <a href="DevolucionIncertarForm.php">regresar</a>
    </body>
</html>
