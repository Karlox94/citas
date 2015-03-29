<?php
/**
* 
*/

require_once 'database.class.php';

class cita extends database{
	
	public function insertar($datos){
		conectar();

		$campos="";
		$valores="";
		$j=0;
	    foreach($datos as $campo => $valor){ 
		  $j++;
		  if($j==1){	
		    $campos = $campos.$campo;
		    $valores = $valores."'".$valor."'";
		  }
		  else{
		    $campos = $campos.','.$campo;		
		    $valores = $valores.','."'".$valor."'";	  
		  }	   
		}
	    $sql = "INSERT INTO medico (".$campos.") VALUES (".$valores.")";

	    desconectar();
		
		return $ejecutar($sql);		
	}

	public function eliminar($id){
		conectar();
		$sql = "DELETE * FROM cita WHERE id=".$id;
		desconectar();
		$ejecutar($sql);

		return "cita eliminada";
	}

	public function buscar($dni){
		conectar();		
		$sql = "SELECT * FROM cita WHERE paciente_dni=".$dni;
		desconectar();
		$do = $ejecutar($sql);
		while ($datos = $vectorDatos($do)) {
		 	$dato[] = $datos;
		 }

		return $dato;
	}
}

?>