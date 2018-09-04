<?php 
include('header.php');
?>
<form enctype="multipart/form-data" action="../controladores/vehiculos.php" method="POST">
	<input type="hidden" name="accion" value="crear">

	<label>matricula</label></br>
	<input type="text" name="matricula"></br>
	<label>modelo</label></br>
	<input type="text" name="modelo"></br>
	<label>precio</label></br>
	<input type="text" name="precio"></br>
	<label>foto</label></br>
	<input type="file" name="foto"></br>

	<input type="submit" value="Crear">
</form>

<?php 
include('footer.php');
?>