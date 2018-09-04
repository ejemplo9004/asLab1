<?php 
include('header.php');
?>
<form action="../controladores/clientes.php" method="POST">
	<input type="hidden" name="accion" value="crear">

	<label>cedula</label></br>
	<input type="text" name="cedula"></br>
	<label>nombre</label></br>
	<input type="text" name="nombre"></br>
	<label>Telefono</label></br>
	<input type="text" name="telefono"></br>

	<input type="submit" name="Crear">
</form>

<?php 
include('footer.php');
?>