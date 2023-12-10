<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"
  type="text/css" href="CSS/estilos.css">
    <title>Editar foto</title>
</head>
<body>
 <header>
        <div class="contenedor">
            <h1 class="titulo">Editar una foto</h1>
        </div>
    </header> 

    <div class="contenedor">
        <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label for="foto">Selecciona la imagen nueva</label>
            <input type="file" id="foto" name="foto">

            <label for="tituloR">Nuevo Titulo de la Imagen </label>
            <input type="text" id="tituloR" name="tituloR">

            <label for="texto">Nueva Descripcion:</label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>
			
			<label for="titulo">Titulo de la Imagen que quiere remplazar</label>
            <input type="text" id="titulo" name="titulo">
			
			
			
                        <input type="submit" class="submit" value="Editar Foto">

        </form>
		
		
    </div>
    <footer>
        <p class="copyright">Hernandez Martinez Evelyn 4BPM  CopyRight</p>
    </footer>
</body>
</html>