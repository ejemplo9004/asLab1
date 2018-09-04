<?php 
include('header.php');
?>
<form action="../controladores/clientes.php" method="POST">
	<input type="hidden" name="accion" value="editar">

	<label>cedula</label></br>
	<input type="text" name="cedula" value="<?php echo $_POST['cedula']; ?>" readonly></br>
	<label>nombre</label></br>
	<input type="text" name="nombre" value="<?php echo $_POST['nombre']; ?>"></br>
	<label>Telefono</label></br>
	<input type="text" name="telefono" value="<?php echo $_POST['telefono']; ?>"></br>

	<input type="submit" name="Guardar">
</form>

<?php 
include('footer.php');
?>