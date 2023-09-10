<?php

session_start();



if (!isset($_SESSION['Usuarioautenticado']) || $_SESSION['Usuarioautenticado'] == 'NAO') {
    header('Location: index.php?login=erro');
}


?>  