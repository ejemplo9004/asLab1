<?php 
include('header.php');
?>
<form action="../controladores/usuarios.php" method="POST">
	<input type="hidden" name="accion" value="crear">

	<label>cedula</label></br>
	<input type="text" name="cedula"></br>
	<label>usuario</label></br>
	<input type="text" name="usuario"></br>
	<label>contraseña</label></br>
	<input type="password" name="password"></br>
	<label>Nombre</label></br>
	<input type="text" name="nombre"></br>

	<input type="submit" name="Crear">
</form>

<?php 
include('footer.php');
?>