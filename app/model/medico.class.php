<?php
/**
* 
*/

require_once 'database.class.php';

class medico extends database{
	
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

	public function consultar(){
		conectar();		
		$sql = "SELECT * FROM medico";
		desconectar();
		$do = $ejecutar($sql);
		while ($datos = $vectorDatos($do)) {
		 	$dato[] = $datos;
		 }

		return $dato;
	}

	public function eliminar($dni){
		conectar();
		$sql = "DELETE * FROM medico WHERE dni=".$dni;
		desconectar();
		$ejecutar($sql);

		return "datos eliminados para el usuario con dni = ".$dni;
	}

	public function modificar($datos, $id){
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
	    $sql = "UPDATE  medico SET (".$campos.") = (".$valores.")";

	    desconectar();
		
		return $ejecutar($sql);
	}

	public function buscar($id){
		conectar();		
		$sql = "SELECT * FROM medico WHERE dni=".$id;
		desconectar();
		$do = $ejecutar($sql);
		while ($datos = $vectorDatos($do)) {
		 	$dato[] = $datos;
		 }

		return $dato;
	}
}


?>