<?php
class Datos
{
	private $servidor= 'localhost';
	private $usuario= "root";
	private $pass="";
	private $bd="biblioteca";
	public  $objetoconexion;

	public function conectar()
	{
			$this->objetoconexion= mysqli_connect($this->servidor,$this->usuario,$this->pass,$this->bd) or die("Error de coneccion");
	}
	public function desconectar()
	{
		mysqli_close($this->objetoconexion);
	}
}
?>
