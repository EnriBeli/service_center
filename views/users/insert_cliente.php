<?php
include("../../includes/conexion/db.php");



$tbl_nombre=$_POST['tbl_nombre'];
$tbl_correo=$_POST['tbl_correo'];
$tbl_telefono=$_POST['tbl_telefono'];
$tbl_marcaregistrada=$_POST['tbl_marcaregistrada'];
$tbl_rfc=$_POST['tbl_rfc'];
$tbl_estado=$_POST['tbl_estado'];
$tbl_municipio=$_POST['tbl_municipio'];
$tbl_direccion=$_POST['tbl_direccion'];


$sql="INSERT INTO tbl_clientes (tbl_nombre, tbl_correo, tbl_telefono, tbl_marcaregistrada, tbl_rfc, tbl_estado, tbl_municipio, tbl_direccion)
VALUES ('$tbl_nombre','$tbl_correo','$tbl_telefono','$tbl_marcaregistrada','$tbl_rfc','$tbl_estado','$tbl_municipio','$tbl_direccion') ";
$query= mysqli_query($conexion,$sql); 


if($query){
    header("Location: create_clientes.php");

}else{

}
?>