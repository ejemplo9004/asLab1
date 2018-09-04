<?php

include '../modelo/admindb.php';


//echo "Hola, soy el controlador de Ventas";

if(isset($_POST['accion']) && $_POST['accion'] == "crear")
{
	CCrearVenta();
}else if(isset($_POST['accion']) && $_POST['accion'] == "editar")
{
	CEditarVenta();
}else if(isset($_POST['accion']) && $_POST['accion'] == "eliminar")
{
	CEliminarVentas();
}else if(isset($_POST['accion']) && $_POST['accion'] == "ver")
{
	CVerUsuario();
}

function CCrearVenta()
{
	$res = CrearVenta($_POST['id'],$_POST['codigoC'],$_POST['codigoV']);
	header('Location: ../vistas/panel.php');
}

function CEditarVenta()
{
	$res = EditarVenta($_POST['id'],$_POST['codigoC'],$_POST['codigoV']);
}


function CListarVentas()
{
	$res = ListarVentas();
	return $res;
}

function CVerVenta($id)
{
	$res =  VerVenta($id) ;
	return $res;
}


function CEliminarVentas()
{

	$res = EliminarVenta($_POST['id']);
	header('Location: ../vistas/listar_ventas.php');
}

?>