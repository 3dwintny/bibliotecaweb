<?php
require_once('..\biblioteca_bd\databases\ClassDatos.php');
class Libro
{
    public function insertar($datos=array())
    {
        $db = new Datos();
        $db->conectar();
         foreach ($datos as $campo=>$valor){
            $$campo = $valor;
         }
        $cadena = "INSERT INTO libro (Titulo, Edicion,id_Autor,estado) VALUES('$titulo','$edicion','$id_autor','$estado')";
        $consulta = mysqli_query($db->objetoconexion,$cadena);
        $db->desconectar();
        echo "<script type=\"text/javascript\">alert(\"Registro Agregado\");</script>";
    }

    public function listar()
        {
            $bd = new Datos();
            $bd->conectar();
            $consulta= "SELECT * FROM libro";
            $dt= mysqli_query($bd->objetoconexion,$consulta);
            $bd->desconectar();
            return $dt;
        }
}
?>
    