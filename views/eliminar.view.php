<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"
  type="text/css" href="CSS/estilos.css">
    <title>Eliminar foto</title>
</head>
<body>
 <header>
        <div class="contenedor">
            <h1 class="titulo">Eliminar una foto</h1>
        </div>
    </header> 

    <div class="contenedor">
        <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			
			
			<label for="titulo">Titulo de la Imagen que quieres Eliminar</label>
            <input type="text" id="titulo" name="titulo">
			
                        <input type="submit" class="submit" value="Eliminar Foto">

        </form>
    </div>

    <footer>
        <p class="copyright">Hernandez Martinez Evelyn 4BPM  CopyRight</p>
    </footer>
</body>
</html>