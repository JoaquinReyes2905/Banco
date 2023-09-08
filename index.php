<?php
require_once "includes/config.php";

$sql = "SELECT * FROM supervisores";

$query = sqlsrv_query($conn, $sql);
$resultados = array();

while ($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
    $resultados[] = $row;
}
   $section = "views/home";
    require_once "views/layout.php";
 
