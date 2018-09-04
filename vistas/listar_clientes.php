<?php 
include('header.php');
?>

<?php 
include('../controladores/clientes.php');
$Lista = CListarClientes();
echo "<table>";
echo "<tr>";
    echo "<th>Cedula</th>";
    echo "<th>Nombre</th> ";
    echo "<th>Telefono</th>";
    echo "<th> </th>";
    echo "<th> </th>";
echo "</tr>";
foreach ($Lista as &$elemento) 
{
    echo "<tr>";
	    echo "<td>".$elemento[0]."</td>";
	    echo "<td>".$elemento[1]."</td> ";
	    echo "<td>".$elemento[2]."</td>";

	    echo '<td><form action="../controladores/clientes.php" method="POST">
				<input type="hidden" name="cedula" value="'.$elemento[0].'">
				<input type="hidden" name="accion" value="eliminar">
				<input type="submit" value="Eliminar" class="btn btn-danger">
			</form></td>';

	    echo '<td><form action="editar_cliente.php" method="POST">
				<input type="hidden" name="cedula" value="'.$elemento[0].'">
				<input type="hidden" name="nombre" value="'.$elemento[1].'">
				<input type="hidden" name="telefono" value="'.$elemento[2].'">
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