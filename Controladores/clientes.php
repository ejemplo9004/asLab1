<?php

if(!isset($HolaMundo)){
	include '../modelo/admindb.php';
}


//echo "Hola, soy el controlador de Clientes";

if(isset($_POST['accion']) && $_POST['accion'] == "crear")
{
	CCrearCliente();
}else if(isset($_POST['accion']) && $_POST['accion'] == "editar")
{
	CEditarCliente();
}else if(isset($_POST['accion']) && $_POST['accion'] == "eliminar")
{
	CEliminarClientes();
}

function CCrearCliente()
{
	$res = CrearCliente($_POST['cedula'],$_POST['nombre'],$_POST['telefono']);
}

function CEditarCliente()
{
	$res = EditarCliente($_POST['cedula'],$_POST['nombre'],$_POST['telefono']);
}


function CListarClientes()
{
	$res = ListarClientes();
	return $res;
}


function CEliminarClientes()
{
	$res = EliminarCliente($_POST['cedula']);
	header('Location: ../vistas/listar_clientes.php');
}

?>