
<?php 
include('header.php');
?>
<form action="../controladores/vehiculos.php" method="POST">
	<input type="hidden" name="accion" value="editar">

	<label>matricula</label></br>
	<input type="text" name="matricula" value="<?php echo $_POST['matricula']; ?>" readonly> </br>
	<label>modelo</label></br>
	<input type="text" name="modelo" value="<?php echo $_POST['modelo']; ?>"></br>
	<label>precio</label></br>
	<input type="text" name="precio" value="<?php echo $_POST['precio']; ?>"></br>
	<label>foto</label></br>
	<input type="text" name="foto" value="<?php echo $_POST['foto']; ?>"></br>

	<input type="submit" name="Guardar">
</form>

<?php 
include('footer.php');
?>