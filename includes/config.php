<?php
$serverName = "PC-F-019\SQLEXPRESS";
$connectionOptions = array(
    "Database" => "BancoNacion",
    "Uid" => "sa",
    "PWD" => "123"
);
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

?>