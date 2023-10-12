<?php

session_start();

if(!isset($_SESSION['ID_conta'])){
    header("Location: http://localhost/TCC2/index.php");
    exit();
} 

// header('Cache-Control: max-age-60');


?>  