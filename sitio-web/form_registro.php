<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sitio-web/CSS/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
<title>Formulario de Registro</title>
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
<div class="formulario-registrate">
    <h1 class="prueba">¡Registrate!</h1>
    <form action="registro.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="colocar_nombre" required />
        <br />
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="colocar_apellido" required />
        <br />
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="email" required />
        <br />
        <label for="usuario">Nombre de usuario</label>
        <input type="text" name="usuario" id="usuario" class="colocar_usuario" />
        <br />
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" class="password" />
        <br />
        <label>
            <input type="checkbox" name="newsletter" value="si" checked="checked" />
            Sí, deseo recibir informacion por mail.
        </label>
        <br />
        <input type="submit" value="Registrarse" class="enviar" />
    </form>
</div>


</body>
</html>