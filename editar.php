<?php
require 'funciones.php';

$conexion=conexion('linkin','root','');

if(!$conexion){
    die();
	}
//varible files guarda infromacion del archivo que se carga
	if($_SERVER['REQUEST_METHOD']=='POST'&&!empty($_FILES)){
	//la funcion get image size comprueba que realmente el archivo seleccionada sea una imagen antes de guardarla se almacena temporalmente
	$check=@getimagesize($_FILES['foto']['tmp_name']);
	
	if($check!==false){
		$carpeta_destino='fotos/';
		$archivo_subido=$carpeta_destino.$_FILES['foto']['name'];
		move_uploaded_file($_FILES['foto']['tmp_name'],$archivo_subido);
	
	$statement=$conexion->prepare('
	     UPDATE fotos SET  titulo=:tituloR,imagen=:imagen,texto=:texto WHERE titulo=:titulo ;
	');
	
	$statement->execute(array(
	         ':tituloR'=>$_POST['tituloR'],
	         ':imagen'=>$_FILES['foto']['name'],
			 ':texto'=>$_POST['texto'],
			 ':titulo'=>$_POST['titulo']
			 
			 ));
			 
			 header('Location: index.php');
			 }else{
			 $error="El archivo no es una imagen o el archivo es muy pesado";
			 }
	}
	
	
	

	
require 'views/editar.view.php';



?>