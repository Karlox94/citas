<?php
/**
* 
*/
require_once 'database.class.php';

class paciente extends database{
	
	function insertar($datos){
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
	    $sql = "insert into paciente (".$campos.") values (".$valores.")";

	    desconectar();
		
		return $ejecutar($sql);
	}

	function consultar(){
		conectar();		
		$sql = "select * from paciente";
		desconectar();
		$do = $ejecutar($sql);
		while ($datos = $vectorDatos($do)) {
		 	$dato[] = $datos;
		 }

		return $dato;
	}

	function eliminar($dni){
		conectar();
		$sql = "delete * from paciente where dni=".$dni;
		desconectar();
		$ejecutar($sql);

		return "datos eliminados para el usuario con dni = ".$dni;
	}

	function modificar($datos, $id){
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
	    $sql = "UPDATE  paciente SET (".$campos.") = (".$valores.")";

	    desconectar();
		
		return $ejecutar($sql);
	}
}

?>