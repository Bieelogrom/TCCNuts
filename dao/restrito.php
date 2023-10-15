<?php

session_start();

$_SESSION['ID_conta'];

if(!isset($_SESSION['ID_conta']) || $_SESSION['ID_conta'] == "0"){
    header("Location: ../../index.php?acesso=erro");
    exit();
} 

// header('Cache-Control: max-age-60');


?>  