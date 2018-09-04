<?php 
include('header.php');
?>

<?php 
include('../controladores/ventas.php');
include('../controladores/clientes.php');

$Lista = CListarVentas();

echo "<table class='table'>";
 echo ' <thead class="thead-dark">';
echo "<tr class='thead-dark'>";
    echo "<th>id venta</th> ";
    echo "<th>Cedula Cliente</th>";
    echo "<th>Codigo del Vehículo</th>";
    echo "<th> </th>";
    echo "<th> </th>";
echo "</tr>";
echo "</thead>";

foreach ($Lista as &$elemento) 
{
    echo "<tr>";
    	$cliente = VerCliente($elemento[1]);
    	$vehiculo = VerVehiculo($elemento[2]);
	    echo "<td>".$elemento[0]."</td> ";
	    echo "<td>".$cliente[1]."</td> ";
	    echo "<td>".$vehiculo[1]." (".$elemento[2].")</td>";
		
		/*
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
			*/

  	echo "</tr>";
}
echo "</table>";
?>
<?php 
include('footer.php');
?>