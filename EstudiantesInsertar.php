<html>
    <head>
        <title>Insertar Estudiantes</title>
    </head>
    <body>
    <?php
    require_once('other/ClassEstudiantes.php');
            $carne = $_POST['carne'];
            $nombres= $_POST['nombres'];
            $apellidos= $_POST['apellidos'];
            $datos = array(
                'carne'=>$carne,
                'nombres'=>$nombres,
                'apellidos'=>$apellidos);
            $au = new Estudiantes();
            $au->insertar($datos);
    ?>
    <a href="EstudiantesInsertarForm.php">regresar</a>
    </body>
</html>
