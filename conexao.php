<?php
    $server = "Localhost";
    $user = "root";
    $password = "1q2w3e$";
    $bd = "medconsul";

    if (mysqli_connect($server, $user, $password, $bd)){
        echo "Conectado!";
    } else
        echo "Erro!";
?>