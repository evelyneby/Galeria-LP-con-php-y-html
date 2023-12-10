<?php
require 'funciones.php';


$conexion=conexion('linkin','root','');

if(!$conexion){
    die();
	}
	
	
	
	if(!$conexion){
    die();
	}
	
//varible files guarda infromacion del archivo que se carga
	if($_SERVER['REQUEST_METHOD']=='POST'&&!empty($_POST)){
	//la funcion get image size comprueba que realmente el archivo seleccionada sea una imagen antes de guardarla se almacena temporalmente
	
	
	
		
	
	$statement=$conexion->prepare('
	    DELETE FROM fotos WHERE titulo=:titulo;
	');
	
	$statement->execute(array(
	         
			 ':titulo'=>$_POST['titulo']
			 
			 ));
			 
			 header('Location: index.php');
	}else{
			 $error="No se pudo eliminar";
			 }
	
	
	
	

	
	
	
	

	
	

	
	require 'views/eliminar.view.php';
	
	
?>