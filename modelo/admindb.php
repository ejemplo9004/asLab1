<?php
$HolaMundo="Hola";
function CrearConeccion() 
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$conn = new mysqli($servername, $username, $password);
	return $conn;
}

////////////////////////////////////////////////// CREATE ///////////////////////////////////////////////
function CrearCliente($cc, $nombre, $telefono) 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "INSERT INTO concesionarios.clientes (Nombre, Cedula, Telefono) VALUES ('$nombre', '$cc', '$telefono')";

	if ($conn->query($sql) === TRUE) 
	{
	    return "Usuario creado satisfactoriamente";
	} else {
	    return "Error: " . $sql . "<br>" . $conn->error;
	}
}

function CrearVehiculo($matricula, $modelo, $precio, $foto) 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "INSERT INTO concesionarios.vehiculos (Matricula, Modelo, Precio, Foto) VALUES ('$matricula', '$modelo', '$precio', '$foto')";

	if ($conn->query($sql) === TRUE) 
	{
	    return "Vehiculo creado satisfactoriamente";
	} else {
	    return "Error: " . $sql . "<br>" . $conn->error;
	}
}

function CrearVenta($id, $codigoC, $codigoV) 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "INSERT INTO concesionarios.ventasgenerales (Id, CodigoC, CodigoV) VALUES ('$id', '$codigoC', '$codigoV')";

	if ($conn->query($sql) === TRUE) 
	{
	    return "Venta creado satisfactoriamente";
	} else {
	    return "Error: " . $sql . "<br>" . $conn->error;
	}
}

function CrearUsuario($cedula, $usuario, $password, $nombre) 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "INSERT INTO concesionarios.usuarios (cedula, usuario, password, nombre) VALUES ('$cedula', '$usuario', '$password', '$nombre')";

	if ($conn->query($sql) === TRUE) 
	{
	    return "Usuario creado satisfactoriamente";
	} else {
	    return "Error: " . $sql . "<br>" . $conn->error;
	}
}


////////////////////////////////////////////////// READ ///////////////////////////////////////////////

function Login($usuario, $password) 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "SELECT * FROM concesionarios.usuarios WHERE (usuario = '$usuario' AND password = '$password')";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    return true;
	} else {
	    return false;
	}
}


function ListarUsuarios() 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "SELECT * FROM concesionarios.usuarios";
	$result = $conn->query($sql);
	$lista = array();
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) 
	    {
        	$elemento = array($row["cedula"], $row["usuario"], $row["password"], $row["nombre"]);
        	array_push($lista, $elemento);
    	}
	} else {
	    return false;
	}
	return ($lista);
}


function VerUsuario($cedula) 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "SELECT * FROM concesionarios.usuarios WHERE cedula = '$cedula'";
	$result = $conn->query($sql);
	$lista = array();
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) 
	    {
        	$lista = array($row["cedula"], $row["usuario"], $row["password"], $row["nombre"]);
    	}
	} else {
	    return false;
	}
	return ($lista);
}


function VerCliente($cedula) 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "SELECT * FROM concesionarios.clientes WHERE cedula = '$cedula'";
	$result = $conn->query($sql);
	$lista = array();
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) 
	    {
        	$lista = array($row["Cedula"], $row["Nombre"], $row["Telefono"]);
    	}
	} else {
	    return false;
	}
	return ($lista);
}

function VerVehiculo($matricula) 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "SELECT * FROM concesionarios.vehiculos WHERE matricula = '$matricula'";
	$result = $conn->query($sql);
	$lista = array();
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) 
	    {
        	$lista = array($row["Matricula"], $row["Modelo"], $row["Precio"], $row["foto"]);
    	}
	} else {
	    return false;
	}
	return ($lista);
}


function ListarClientes() 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "SELECT * FROM concesionarios.clientes";
	$result = $conn->query($sql);
	$lista = array();
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) 
	    {
        	$elemento = array($row["Cedula"], $row["Nombre"], $row["Telefono"]);
        	array_push($lista, $elemento);
    	}
	} else {
	    return false;
	}
	return ($lista);
}


function ListarVehiculos() 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "SELECT * FROM concesionarios.vehiculos";
	$result = $conn->query($sql);
	$lista = array();
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) 
	    {
        	$elemento = array($row["Matricula"], $row["Modelo"], $row["Precio"], $row["foto"]);
        	array_push($lista, $elemento);
    	}
	} else {
	    return false;
	}
	return ($lista);
}

function ListarVentas() 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "SELECT * FROM concesionarios.ventasgenerales";
	$result = $conn->query($sql);
	$lista = array();
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) 
	    {
        	//$elemento = array($row["Id"], $row["Cedula"], $row["Nombre"], $row["Telefono"], $row["Modelo"], $row["Matricula"], $row["Precio"], $row["foto"]);
        	$elemento = array($row["Id"], $row["CodigoC"], $row["CodigoV"]);
        	array_push($lista, $elemento);
    	}
	} else {
	    return false;
	}
	return ($lista);
}



////////////////////////////////////////////////// UPDATE ///////////////////////////////////////////////

function EditarCliente($cc, $nombre, $telefono) 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "UPDATE concesionarios.clientes SET Nombre = '$nombre', Telefono = '$telefono' WHERE Cedula = '$cc'";

	if ($conn->query($sql) === TRUE) 
	{
	    return "Usuario editado satisfactoriamente";
	} else {
	    return "Error: " . $sql . "<br>" . $conn->error;
	}
}


function EditarVehiculo($matricula, $modelo, $precio, $foto) 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "UPDATE concesionarios.vehiculos SET Modelo = '$modelo', Precio = '$precio', Foto = '$foto' WHERE Matricula = '$matricula'";

	if ($conn->query($sql) === TRUE) 
	{
	    return "Vehiculo editado satisfactoriamente";
	} else {
	    return "Error: " . $sql . "<br>" . $conn->error;
	}
}


function EditarVenta($id, $codigoC, $codigoV) 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "UPDATE concesionarios.ventas SET CodigoC = '$codigoC', CodigoV = '$codigoV' WHERE id = '$id'";

	if ($conn->query($sql) === TRUE) 
	{
	    return "Venta editada satisfactoriamente";
	} else {
	    return "Error: " . $sql . "<br>" . $conn->error;
	}
}

function EditarUsuario($cedula, $usuario, $password, $nombre) 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "UPDATE concesionarios.usuarios SET Usuario = '$usuario', Password = '$password', Nombre = '$nombre' WHERE Cedula = '$cedula'";

	if ($conn->query($sql) === TRUE) 
	{
	    return "Usuario editado satisfactoriamente";
	} else {
	    return "Error: " . $sql . "<br>" . $conn->error;
	}
}


////////////////////////////////////////////////// DELETE ///////////////////////////////////////////////

function EliminarCliente($cc) 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "DELETE FROM concesionarios.clientes WHERE Cedula = '$cc'";


	if ($conn->query($sql) === TRUE) 
	{
	    return "Usuario eliminado satisfactoriamente";
	} else {
	    return "Error: " . $sql . "<br>" . $conn->error;
	}
}


function EliminarVehiculo($matricula) 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "DELETE FROM concesionarios.vehiculos WHERE Matricula = '$matricula'";

	if ($conn->query($sql) === TRUE) 
	{
	    return "Vehiculo eliminado satisfactoriamente";
	} else {
	    return "Error: " . $sql . "<br>" . $conn->error;
	}
}


function EliminarVenta($id) 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "DELETE FROM concesionarios.ventas WHERE id = '$id'";

	if ($conn->query($sql) === TRUE) 
	{
	    return "Venta editada satisfactoriamente";
	} else {
	    return "Error: " . $sql . "<br>" . $conn->error;
	}
}

function EliminarUsuario($cedula) 
{
	$conn = CrearConeccion();

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
    $sql = "DELETE FROM  concesionarios.usuarios WHERE Cedula = '$cedula'";

	if ($conn->query($sql) === TRUE) 
	{
	    return "Usuario eliminado satisfactoriamente";
	} else {
	    return "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>