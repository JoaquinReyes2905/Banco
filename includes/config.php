<?php

$serverName = "DESKTOP-QB22C4J\SQLEXPRESS";
$connectionOptions = array(
    "Database" => "BancoNacion",
    "Uid" => "sa",
    "PWD" => "123",
);
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
} 

session_start();
?>