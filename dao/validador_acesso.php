<?php

session_start();

if (!isset($_SESSION['ID_CONTA'])) {
    header('Location: index.php?login=erro');
    exit;
}


?>  