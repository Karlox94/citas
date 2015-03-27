<?php
/**
* 
*/
class database{

	private $conexion;
	
	function conectar(){
		try {
			$conexion = new PDO('pgsql:host=localhost;port=5432;dbname=postgres','postgres','casalcedo94');
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			echo "Conexión ok.";
		}
		catch (Exception $e) {
			die('Error : ' . $e->GetMessage());
		}
	}

	function ejecutar($sql){
		$preparar = $conexion->prepare($sql);	
		$consulta = $preparar->execute();

		return $consulta;
	}

	function contar($consulta){
		$cantidad_registro = $consulta->rowCount();

		return $cantidad_registro;
	}

	function vectorDatos($consulta){
		$datos = $consulta->fetch();

		return $datos;
	}

	function desconectar(){
		$conexion = null;
	}
}
 

?>