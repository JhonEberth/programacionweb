<?php
     /**
       El script devuelve:
           1.- success:Estado de Ejecucion
           2.- id: id del registro insertado  **/
        include('../crud/inc/conexion.php');
        $oRespuesta=array();
        if($conexion){
        	$sql='DELETE FROM personas';
          ."WHERE personas_id={$_POST['id']}";

        	$resultado=$conexion->query($sql);
        	
        	$oRespuesta['success']=TRUE;

        }else{
        	$oRespuesta['success']=FALSE;
        }
        echo json_encode($oRespuesta);
?>