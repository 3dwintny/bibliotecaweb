<?php
require_once('..\biblioteca_bd\databases\ClassDatos.php');
class Prestamo
{
    public function insertar($datos=array())
    {
        $estadoLibro = $_POST['sLibro'];
        $db = new Datos();
        $db->conectar();
         foreach ($datos as $campo=>$valor){
            $$campo = $valor;
         }
        $cadena = "INSERT INTO prestamo (fecha_prestamo, fecha_devolucion,id_estudiante,id_libro,estado)
        VALUES('$fecha_prestamo','$fecha_devolucion','$id_estudiante','$id_libro','$estado')";
        $actualizar = "UPDATE libro SET estado ='No Disponible' WHERE id = $estadoLibro";
        $consulta = mysqli_query($db->objetoconexion,$cadena);
        $consulta = mysqli_query($db->objetoconexion,$actualizar);
        $db->desconectar();
        echo "<script type=\"text/javascript\">alert(\"Registro Agregado\");</script>";
    }

    public function listar(){
            $bd = new Datos();
            $bd->conectar();
            $consulta= "SELECT * FROM prestamo WHERE estado = 'En Curso'";
            $dt= mysqli_query($bd->objetoconexion,$consulta);
            $bd->desconectar();
            return $dt;
    }
    public function listarEstudiante(){
            $bd = new Datos();
            $bd->conectar();
            $consulta= "SELECT id,nombres,apellidos FROM estudiantes";
            $dts= mysqli_query($bd->objetoconexion,$consulta);
            $bd->desconectar();
            return $dts;
    }

    public function listarLibro(){
            $bd = new Datos();
            $bd->conectar();
            $consulta= "SELECT id,Titulo FROM libro where estado = 'Disponible'";
            $dts= mysqli_query($bd->objetoconexion,$consulta);
            $bd->desconectar();
            return $dts;
    }    
}
?>
