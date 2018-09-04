<?php 
include('header.php');
?>

<form action="../controladores/usuarios.php" method="POST">
	<input type="hidden" name="accion" value="editar">

	<label>cedula</label></br>
	<input type="text" name="cedula" value="<?php echo $_POST['cedula']; ?>" readonly> </br>
	<label>usuario</label></br>
	<input type="text" name="usuario" value="<?php echo $_POST['usuario']; ?>"></br>
	<label>contraseña</label></br>
	<input type="password" name="password" value="<?php echo $_POST['password']; ?>"></br>
	<label>Nombre</label></br>
	<input type="text" name="nombre" value="<?php echo $_POST['nombre']; ?>"></br>

	<input type="submit" name="Guardar">
</form>

<?php 
include('footer.php');
?>