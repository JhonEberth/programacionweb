<?php
	include('../crud/inc/conexion.php');
?>
<?php
	$persona['paterno']="Flores";
	$persona['materno']="Apaza";
	$persona['nombres']="Jaime";
	$persona['personas_id']=8;
	$personas[]=$persona;
	$personas[]=$persona;

	$respuesta['cantidad']=2;
	$respuesta['items']=$personas;

	echo json_encode($respuesta);

	$personas=array();
	while($fila=$respuesta->fetch_assoc()){
		$personas[]=$fila;
	}
?>