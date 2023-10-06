<?php
require_once "includes/config.php";
$status = false;
if(isset($_POST['submit'])){
    $dni =  $_POST['dni'];
    $clave = md5($_POST['pass']);
    $sql = "SELECT * FROM clientes WHERE DNI = '". $dni ."' AND clave = '". $clave ."'";
    $query = sqlsrv_query($conn , $sql, array(), array( "Scrollable" => 'static' ));
    if(!$query){
        $status = true;
    }
    $fila = sqlsrv_num_rows($query);
    if($fila == 1){
        session_start();
        $_SESSION['usuario'] = sqlsrv_fetch_array($query , SQLSRV_FETCH_ASSOC); 
        header('Location: index.php');
    }
}

require_once "views/login.php";