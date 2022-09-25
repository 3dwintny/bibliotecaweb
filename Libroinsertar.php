<html>
    <head>
        <title>Insertar Libro</title>
    </head>
    <body>
    <?php
    require_once('other\ClassLibro.php');
            $titulo = $_POST['titulo'];
            $edicion= $_POST['edicion'];
            $id_autor= $_POST['id_autor'];
            $estado= 'Disponible';

            $datos = array(
                'titulo'=>$titulo,
                'edicion'=>$edicion,
                'id_autor'=>$id_autor,
                'estado' => $estado);
            $au = new Libro();
            $au->insertar($datos);
    ?>
    <a href="LibroinsertarForm.php" >regresar</a>
    </body>
</html>
