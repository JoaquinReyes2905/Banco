<?php
require_once "includes/config.php";
$fila = 0;
$status = false;
if (isset($_POST['submit'])) {
    $dni =  $_POST['dni'];
    $clave = md5($_POST['pass']);
    $sql = "SELECT * FROM clientes WHERE DNI = '" . $dni . "' AND clave = '" . $clave . "'";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        $status = true;
    }
    if ($query) {
        $fila = mysqli_num_rows($query);
        if ($fila == 1) {
            session_start();
            $_SESSION['cliente'] = mysqli_fetch_assoc($query);
            header('Location: perfil.php');
        }
    }
    echo $clave;
}

require_once "views/login.php";
