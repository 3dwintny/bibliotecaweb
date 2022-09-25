<html>
    <head>
        <title>Insertar Prestamo</title>
    </head>
    <body>
    <?php
    require_once('other/ClassPrestamo.php');
            $fecha_prestamo = $_POST['fecha_prestamo'];
            $fecha_devolucion= $_POST['fecha_devolucion'];
            $id_estudiante= $_POST['sEstudiante'];
            $id_libro= $_POST['sLibro'];
            $estado = "En Curso";

            
            $datos = array(
                'fecha_prestamo'=>$fecha_prestamo,
                'fecha_devolucion'=>$fecha_devolucion,
                'id_estudiante'=>$id_estudiante,
                'id_libro'=>$id_libro,
                'estado'=>$estado);
            $au = new Prestamo();
            $au->insertar($datos);
    ?>
    <a href="PrestamoInsertarForm.php" >regresar</a>
    </body>
</html>
