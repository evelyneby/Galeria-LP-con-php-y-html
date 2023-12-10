

<link rel="stylesheet"
  type="text/css" href="CSS/estilos.css">

 <?php

require 'funciones.php';
//se muestran 8 fotos

$fotos_por_pagina=8;

//para saber de donde vamos a moestrar infromacion para mostrar imagenes en la pagina actual
$pagina_actual=(isset($_GET['p'])?(int)$_GET['p']:1);
//la variable inicio calcula el numero de fotos por pagina y la pagina en la que se encuentra
$inicio=($pagina_actual>1)?$pagina_actual*$fotos_por_pagina-$fotos_por_pagina:0;

//Se realiza una conexion a nuestra base de datos
$conexion=conexion('linkin','root','');

if(!$conexion){
    die();
	}
//preparamos la consulta

$statement=$conexion->prepare("
SELECT SQL_CALC_FOUND_ROWS*FROM fotos LIMIT $inicio,$fotos_por_pagina");

//Ejecutamos la consulta
$statement->execute();
//SE guarda la consulta en la variable $fotos
$fotos=$statement->fetchAll();

//Si no hay fotos direccionamos a la pagina index.php
if(!$fotos){
	header('Location: index.php');
}

$statement=$conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statement->execute();

$total_post=$statement->fetch()['total_filas'];
$total_paginas=ceil($total_post/$fotos_por_pagina);

 require 'views/index.view.php';

?>  