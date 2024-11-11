<?php 
session_start();
 
require '../bd/conexion_bd.php';

$obj = new BD_PDO();

$categoria = $_GET['p'];
$datos = $obj->Ejecutar_Instruccion("Select * from tblcategoria where NomCategoria='$categoria'");

echo json_encode($datos);	

	 ?>	