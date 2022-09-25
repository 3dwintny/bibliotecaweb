<html>
    <head>
        <title>Insertar Autor</title>
    </head>
    <body>
    <?php
    require_once('other/ClassAutor.php');
            $nombres = $_POST['nombres'];
            $apellidos= $_POST['apellidos'];
            $fecha_nac= $_POST['fecha_nac'];

            $datos = array(
                'nombres'=>$nombres,
                'apellidos'=>$apellidos,
                'fecha_nac'=>$fecha_nac);
            $au = new Autor();
            $au->insertar($datos);
    ?>
    <a href="Autorinsertarform.php" >regresar</a>
    </body>
</html>
