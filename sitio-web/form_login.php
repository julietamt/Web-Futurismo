<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sitio-web/CSS/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
	<title>Formulario de Login</title>
</head>

<body>
<header>
    <nav>
      <div>
        <a href="../sitio-web/index.html"> <img src="../sitio-web/imagenes/logo-pagina.png" alt="logo-pagina" class="logo"> </a>
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
            <li><a href="../sitio-web/form_registro.php">Registrate</a></li>
         </ul>
        </nav>
    </nav>
  </header>
	<h2>Logueate</h2>
	<form action="login.php" method="post">
    	<label>Nombre de usuario
        	<input name="usuario" type="text" />
        </label><br />
        <label>Contraseña
        	<input type="password" name="password" />
        </label><br />
        	<input type="submit" value="Login"/>	
    </form>
    <a href="form_registro.php">Registrate</a> si no sos usuario.
    


</body>
</html>