<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sitio-web/CSS/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <title>Contacto</title>
</head>
<body>
	<header>
		<nav>
		  <div class="logo">
			<a href="../sitio-web/index.html"> <img src="../sitio-web/imagenes/logo-pagina.png" alt="logo-pagina"> </a>
		  </div>
			<nav id="menu">
			  <ul>
				<li><a href="../sitio-web/artistas.html">Artistas</a></li>
				<li><a href="../sitio-web/historia.html">Historia</a>
				  <ul>
					  <li><a href="../sitio-web/arquitectura.html">Arquitectura</a></li>
					</ul>
				</li>
				<li><a href="../sitio-web/galeria.html">Galería</a></li>
				<li><a href="../sitio-web/contacto.html">Contacto</a></li>
			 </ul>
			</nav>
		</nav>
	  </header>
 
      <?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%'");
?>
	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	
			echo $resultados['nombre'];
			echo $resultados['bio'];
			
	?>
    </p>
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
</article>


	  </footer>
  </body>
  </html>