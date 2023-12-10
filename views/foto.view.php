<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet"
  type="text/css" href="CSS/estilos.css">
  
    <title>Galeria LP</title>
  
</head>
<body>
<header>
    <div class="contenedor">
    <h1 class="titulo">Foto: <?php if(!empty($foto['titulo'])){
		            echo $foto['titulo'];
	}else{
	echo $foto['imagen'];
	} ?></h1>
    </div>

	</header>
	<div class="contenedor">
	     <div class="foto">
		     <img  src="fotos/<?php echo $foto['imagen']; ?>" alt="">
			 
			 <p id="texto" name="texto" class="texto"><?php echo $foto['texto']; ?></p>
		<a href="index.php" class="regresar"> Regresar </a>
		<a href="editar.php" class="regresar"> Editar la foto (datos de ella) </a>
		<a href="eliminar.php" class="regresar"> Eliminar </a>
		
		
		</div>
		</div>

<footer>
<p class="copyright"> Hernandez Martinez Evelyn 4BPM  CopyRight</p>
</footer>
</body>
</html>