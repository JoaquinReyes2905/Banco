<?php
$conn = mysqli_connect('localhost' , 'sa' , '123' , 'BancoNacion');
if(!$conn){
    "Fallo de consulta: " . mysqli_connect_error();
    die();
}
echo $conn;
