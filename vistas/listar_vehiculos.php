<?php 
include('header.php');
?>

<?php 
include('../controladores/vehiculos.php');
$Lista = CListarVehiculos();
echo "<table>";
echo "<tr>";
    echo "<th>Matricula</th>";
    echo "<th>Modelo</th> ";
    echo "<th>Precio</th>";
    echo "<th>Foto</th>";
    echo "<th> </th>";
    echo "<th> </th>";
echo "</tr>";
foreach ($Lista as &$elemento) 
{
    echo "<tr>";
	    echo "<td>".$elemento[0]."</td>";
	    echo "<td>".$elemento[1]."</td> ";
	    echo "<td>".$elemento[2]."</td>";
	    echo "<td><img src=../images/".$elemento[3]." alt='vista previa' height='42' width='42'></td>";

	    echo '<td><form action="../controladores/vehiculos.php" method="POST">
				<input type="hidden" name="matricula" value="'.$elemento[0].'">
				<input type="hidden" name="accion" value="eliminar">
				<input type="submit" value="Eliminar" class="btn btn-danger">
			</form></td>';

	    echo '<td><form action="editar_vehiculo.php" method="POST">
				<input type="hidden" name="matricula" value="'.$elemento[0].'">
				<input type="hidden" name="modelo" value="'.$elemento[1].'">
				<input type="hidden" name="precio" value="'.$elemento[2].'">
				<input type="hidden" name="foto" value="'.$elemento[3].'">
				<input type="hidden" name="accion" value="editar">
				<input type="submit" value="Editar" class="btn btn-primary">
			</form></td>';

  	echo "</tr>";
}
echo "</table>";
?>
<?php 
include('footer.php');
?>