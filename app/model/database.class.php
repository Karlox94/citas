<?php
/**
* 
*/
class database{

	private $conexion;
	
	public function conectar(){
		try {
			$conexion = new PDO('pgsql:host=localhost;port=5432;dbname=postgres','postgres','casalcedo94');
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			echo "Conexión ok.";
		}
		catch (Exception $e) {
			die('Error : ' . $e->GetMessage());
		}
	}

	public function ejecutar($sql){
		$preparar = $conexion->prepare($sql);	
		$consulta = $preparar->execute();

		return $consulta;
	}

	public function contar($consulta){
		$cantidad_registro = $consulta->rowCount();

		return $cantidad_registro;
	}

	public function vectorDatos($consulta){
		$datos = $consulta->fetch();

		return $datos;
	}

	public function desconectar(){
		$conexion = null;
	}
}

?>