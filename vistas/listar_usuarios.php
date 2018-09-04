<?php 
include('header.php');
?>

<?php 
include('../controladores/usuarios.php');
$Lista = CListarUsuarios();
echo "<table class='table'>";
 echo ' <thead class="thead-dark">';
echo "<tr class='thead-dark'>";
    echo "<th>Cedula</th>";
    echo "<th>Usuario</th> ";
    echo "<th>Contraseña</th>";
    echo "<th>Nombre</th>";
    echo "<th> </th>";
    echo "<th> </th>";
echo "</tr>";
echo "</thead>";
foreach ($Lista as &$elemento) 
{
    echo "<tr>";
	    echo "<td>".$elemento[0]."</td>";
	    echo "<td>".$elemento[1]."</td> ";
	    echo "<td>".$elemento[2]."</td>";
	    echo "<td>".$elemento[3]."</td>";

	    echo '<td><form action="../controladores/usuarios.php" method="POST">
				<input type="hidden" name="cedula" value="'.$elemento[0].'">
				<input type="hidden" name="accion" value="eliminar">
				<input type="submit" value="Eliminar" class="btn btn-danger">
			</form></td>';

	    echo '<td><form action="editar_usuario.php" method="POST">
				<input type="hidden" name="cedula" value="'.$elemento[0].'">
				<input type="hidden" name="usuario" value="'.$elemento[1].'">
				<input type="hidden" name="password" value="'.$elemento[2].'">
				<input type="hidden" name="nombre" value="'.$elemento[3].'">
				<input type="hidden" name="accion" value="editar">
				<input type="submit" value="editar" class="btn btn-primary">
			</form></td>';

  	echo "</tr>";
}
echo "</table>";
?>
<?php 
include('footer.php');
?>