<?php

if(!$_SESSION['usuario']){
    header('Location: register.php');
}else{
    require_once "index.php";
}