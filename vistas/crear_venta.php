<?php 
include('header.php');
include('../modelo/admindb.php');
?>
<form action="../controladores/ventas.php" method="POST">
	<input type="hidden" name="accion" value="crear">

	<label>id</label></br>
	<input type="text" name="id"></br>
	<label>Codigo del vehiculo</label></br>

<select name = "codigoV">
	<?php
	$vehiculos = ListarVehiculos();
	foreach ($vehiculos as $vehiculo) {
		echo "<option value='".$vehiculo[0]."''>".$vehiculo[0]."</option>";
	}
	 ?>
</select></br>

	<label>Cliente</label></br>
<select name = "codigoC">
	<?php
	$clientes = ListarClientes();
	foreach ($clientes as $cliente) {
		echo "<option value='".$cliente[0]."''>".$cliente[0]."</option>";
	}
	 ?>
</select></br></br>

	<input type="submit" value="Crear">
</form>

<?php 
include('footer.php');
?>