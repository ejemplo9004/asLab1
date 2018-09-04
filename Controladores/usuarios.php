<?php
if(!isset($HolaMundo)){
	include '../modelo/admindb.php';
}



//echo "Hola, soy el controlador de Usuarios";

if(isset($_POST['accion']) && $_POST['accion'] == "login")
{
	CLogin();
}else if(isset($_POST['accion']) && $_POST['accion'] == "crear")
{
	CCrearUsuario();
}else if(isset($_POST['accion']) && $_POST['accion'] == "editar")
{
	CEditarUsuario();
}else if(isset($_POST['accion']) && $_POST['accion'] == "eliminar")
{
	CEliminarUsuarios();
}else if(isset($_POST['accion']) && $_POST['accion'] == "ver")
{
	CVerUsuario();
}if(isset($_GET['accion']) && $_GET['accion'] == "ver")
{
	CVerUsuarioGet();
}

function CLogin()
{
	$res = Login($_POST['usuario'],$_POST['pass']);
	if($res)
	{
		echo "</br> Usuario iniciado";
		header('Location: ../vistas/panel.php');
	}else{
		echo "</br> Usuario incorrecto";
	}
}

function CCrearUsuario()
{
	$res = CrearUsuario($_POST['cedula'],$_POST['usuario'],$_POST['password'],$_POST['nombre']);
	header('Location: ../vistas/login.php');
}

function CEditarUsuario()
{
	$res = EditarUsuario($_POST['cedula'],$_POST['usuario'],$_POST['password'],$_POST['nombre']);
	header('Location: ../vistas/panel.php');
}


function CListarUsuarios()
{
	$res = ListarUsuarios();
	return $res;
}

function CVerUsuario($cedula)
{
	$res =  VerUsuario($cedula) ;
	return $res;
}

function CVerUsuarioGet($cedula)
{
	$res =  VerUsuario($cedula) ;
	return $res;
}


function CEliminarUsuarios()
{

	$res = EliminarUsuario($_POST['cedula']);
	header('Location: ../vistas/listar_usuarios.php');
}

?>