<?php
    require_once('../biblioteca_bd/databases/ClassDatos.php');
    class devolucion{
        function listar()
    {
        $bd = new Datos();
        $bd->conectar();
        $consulta= "SELECT * FROM devolucion";
        $dt= mysqli_query($bd->objetoconexion,$consulta);
        $bd->desconectar();
        return $dt;
    }
    
    public function insertar($datos=array())
        {
            $db = new Datos();
            $db->conectar();
            foreach ($datos as $campo=>$valor){                     
                $$campo = $valor;
            }
            $cadena = "INSERT INTO devolucion (id_Prestamo, fecha) VALUES('$id_prestamo','$fecha')";
            $consulta = mysqli_query($db->objetoconexion,$cadena);
            $db->desconectar();
            echo "<script type=\"text/javascript\">alert(\"Registro Agregado\");</script>"; 
        }

        public function listarPrestamo(){
            $bd = new Datos();
            $bd->conectar();
            $consulta= "SELECT id FROM `prestamo` WHERE estado = 'En Curso'";
            $dt= mysqli_query($bd->objetoconexion,$consulta);
            $bd->desconectar();
            return $dt;
        }

        public function actualizarPrestamo(){
            $prest = $_POST['sPrestamos'];
            $bd = new Datos();
            $bd->conectar();
            $consulta= "UPDATE prestamo SET estado = 'Finalizado' WHERE id = $prest";
            $dt= mysqli_query($bd->objetoconexion,$consulta);
            $bd->desconectar();
            return $dt;
        }

        public function actualizarLibro(){
            $prest = $_POST['sPrestamos'];
            $bd = new Datos();
            $bd->conectar();
            $consultar= "SELECT id_libro FROM prestamo WHERE id = $prest";
            $resultado = mysqli_query($bd->objetoconexion,$consultar);
            $capturarLibro = $resultado->fetch_array()[0] ?? '';
            $consulta= "UPDATE libro SET estado ='Disponible' WHERE id = $capturarLibro";
            $dt= mysqli_query($bd->objetoconexion,$consulta);
            $bd->desconectar();
            return $dt;
        }
    
    }

?>