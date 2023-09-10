<?php

session_start();



if (!isset($_SESSION['Usuarioautenticado']) || $_SESSION['Usuarioautenticado'] == 'NAO') {
    header('Location: index.php?login=erro');
}else if(!isset($_SESSION['Adminautenticado']) || $_SESSION['Adminautenticado'] == 'NAO') {
    header('Location: index.php?login=erro');
} 


?>