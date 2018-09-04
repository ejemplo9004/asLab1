<?php 
include('header.php');
?>
<div class="panel panel-default">
  <div class="panel-heading">Iniciar sesión</div>
  <div class="panel-body">
	<form action="../controladores/usuarios.php" method="POST">
		<input type="hidden" name="accion" value="login"></br>
		<input type="text" name="usuario"></br>
		<input type="password" name="pass"></br></br>
		<input type="submit" name="Iniciar" class="btn btn-primary"></br>
	</form>

  </div>
</div>

<?php 
include('footer.php');
?>