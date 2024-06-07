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
	<h2 class="prueba" >Registrate en el sitio</h2>
    <form action="registro.php" method="post" >
    	<label>Nombre
        	<input type="text" name="nombre" required />
        </label><br />
		<label>Apellido
        	<input type="text" name="apellido" required />
        </label><br />
        <label>Email
        	<input type="email" name="email" required />
        </label><br />
        <label>Nombre de usuario
        	<input name="usuario" type="text" />
        </label><br />
        <label>Contraseña
        	<input type="password" name="password" />
        </label><br />
        <label>
            <input name="newsletter" type="checkbox" value="si" checked="checked" /> Sí, deseo recibir informacion por mail.
        </label><br />
        <input type="submit" value="Registrarse"/>	
    </form>

</body>
</html>