<?php

include '../modelo/admindb.php';


//echo "Hola, soy el controlador de Vehiculos";

if(isset($_POST['accion']) && $_POST['accion'] == "crear")
{
	CCrearVehiculo();
}else if(isset($_POST['accion']) && $_POST['accion'] == "editar")
{
	CEditarVehiculo();
}else if(isset($_POST['accion']) && $_POST['accion'] == "eliminar")
{
	CEliminarVehiculos();
}

function CCrearVehiculo()
{
	$target_path = "../images/";
	$target_path = $target_path . $_POST['matricula'].".jpg";
	if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)) 
	{ 
		//echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";
	} else{
		echo "Ha ocurrido un error, trate de nuevo!";
	}

	$res = CrearVehiculo($_POST['matricula'],$_POST['modelo'],$_POST['precio'], $_POST['matricula'].".jpg");
}

function CEditarVehiculo()
{
	$res = EditarVehiculo($_POST['matricula'],$_POST['modelo'],$_POST['precio'],$_POST['foto']);
}


function CListarVehiculos()
{
	$res = ListarVehiculos();
	return $res;
}


function CEliminarVehiculos()
{
	$res = EliminarVehiculo($_POST['matricula']);
	header('Location: ../vistas/listar_vehiculos.php');
}

?>