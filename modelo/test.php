<?php

include 'admindb.php';
// TEST PARA CREAR UN USUARIO
//CrearUsuario('1128454517', "Morion", "123", "Andrés Adrián Martínez Carmona");
//CrearUsuario('222', "Morion2", "1234", "Andrna");

// TEST PARA CREAR VENTA
//CrearVenta('1234', "1122140270", "jdg-445");

// TEST PARA LOGIN
$com = Login("Morion", "123");
if ($com) {
	//echo "</br>Si hay usuario</br>";
}else{
	//echo "</br>no hay usuario</br>";
}

// LISTAR USUARIOS
//$listado =  ListarUsuarios();
//print_r ($listado);

// LISTAR VEHICULOS

// LISTAR VENTAS

// EDITAR CLIENTE
//EditarCliente("71219161", "Ciro Ramires", "0000000");

 // ELIMINAR VENTA
//EliminarCliente("71219161") ;

 //print_r(VerUsuario("1128454517"));

?>