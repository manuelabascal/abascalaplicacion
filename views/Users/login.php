<h2 align="center">Iniciar sesion </h2>

<form action="<?php echo APP_URL; ?>users/login" method="POST">
<link rel="stylesheet" href="<?php echo APP_URL_CSS ?>estilos.css">
	<p>
	    <label for="username">Usuario:</label>
		<input type="text" placeholder="&#50883; Username" name="username">
	</p>
	<p>
	    <label for="username">contraseña:</label>
		<input type="password" placeholder="&#128477; password" name="password">
	</p>
	<p>
		<input type="submit" value="Login">
	</p>
</form>