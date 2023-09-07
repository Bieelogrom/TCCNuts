<?php

session_start();



if (!isset($_SESSION['Adminautenticado']) || $_SESSION['Adminautenticado'] == 'NAO') {
    header('Location: index.php?login=erro');
}



?>