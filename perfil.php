<?php
require_once "includes/config.php";
$id = $_SESSION['cliente']['id_cliente'];
$num_cuenta = $_SESSION['cliente']['num_cuenta_bancaria'];
$sql = "SELECT * FROM cuentas_bancarias WHERE id_cliente = '".$id."'";
$res = mysqli_query($conn , $sql);

if(!$res){
    "Fallo de consulta" . mysqli_error($conn);
    die();
}
$perfil = mysqli_fetch_all($res , MYSQLI_ASSOC);

$sql2 = "SELECT * FROM transacciones INNER JOIN sucursales 
ON transacciones.id_sucursal = sucursales.id_sucursal
WHERE num_cuenta_bancaria = '".$num_cuenta."'";
$res2 = mysqli_query($conn , $sql2);

$movimientos = mysqli_fetch_all($res2 , MYSQLI_ASSOC);
$section = "perfil";
require_once "views/layout.php";