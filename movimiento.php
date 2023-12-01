<?php
require_once "includes/config.php";

$sql = "SELECT * FROM sucursales";
$query = mysqli_query($conn, $sql);
if ($query) {
    $sucursales = mysqli_fetch_all($query, MYSQLI_ASSOC);
}
$num = $_SESSION['cliente']['num_cuenta_bancaria'];
if (isset($_POST['submit'])) {
    $sql2 = "INSERT INTO `transacciones` VALUES (null , '" . $_POST['sucursal'] . "' , '" . $_POST['cajero'] . "' , '" . $num . "' , '" . $_POST['tipo'] . "' , '" . $_POST['monto'] . "', NOW() , 0 , 'proceso')";
    $query2 = mysqli_query($conn, $sql2);
    if (!$query2) {
        echo "fallo: " . mysqli_error($conn);
    }
    if ($query2) {
        header('Location: perfil.php');
    }
}
$section = "views/movimiento";
require_once "views/layout.php";
