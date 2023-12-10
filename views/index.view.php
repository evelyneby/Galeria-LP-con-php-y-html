<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Galeria Linkin Park</title>
    
    <link rel="stylesheet"
  type="text/css" href="../CSS/estilos.css">
</head>
<body>
<header>
    <div class="contenedor">
    <h1 class="titulo">Mi Galeria de Linkin Park en PHP y MySql</h1>
    </div>
	</header>
<section class="fotos">
    <div class="contenedor">
		
		<!--en este apartado agregaremos el codigo para llamar el arreglo fotos y mostrar las imagenes por pagina -->
		<?php 
		
		foreach($fotos as $foto):?>
		<div class="thumb">
		      <a href="foto.php?id=<?php echo $foto['id']; ?>">
			     <img src="fotos/<?php echo $foto['imagen']?>" alt="">
				 </a>
		
    </div>
	<?php endforeach;?>
	<!--en este apartado agregaremos el codigo para paginar el contenido -->
	<div class="paginacion">
			<?php if($pagina_actual>1):?>
			<a href="index.php?p=<?php echo $pagina_actual-1;?>" class="izquierda">Pagina Anterior </a>
			
			<?php endif?>
			
			<a href="subir.php">Subir foto </a>
			
			<?php if($total_paginas !=$pagina_actual):?>
			<a href="index.php?p=<?php echo $pagina_actual+1;?>" class="derecha">Pagina Siguiente </a>
			
			<?php endif?>
			
			</div>
			</div>
			
</section>

<footer>
<p class="copyright"> Hernandez Martinez Evelyn 4BPM  CopyRight</p>
</head>
</body>
</html>