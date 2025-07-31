<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $bd = "medconsul";

    if ( mysqli_connect($server, $user, $password, $bd) ) {
        echo "Conectado!";
    } else
        echo "Erro!";
        
?>