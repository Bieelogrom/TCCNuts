<?php

session_start();

$_SESSION['ID_conta'];

if(!isset($_SESSION['ID_conta'])){
    header("Location: ../../index.php?acesso=erro");
    exit();
} 

// header('Cache-Control: max-age-60');


?>  