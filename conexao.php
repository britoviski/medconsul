<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $bd = "medconsul";

    if ( $conn = mysqli_connect($server, $user, $password, $bd) ) {
        //echo "Conectado!";
    } else
        echo "Erro!";

    function mensagem($texto, $tipo) {
        echo "<div class='alert alert-$tipo' role='alert'>
            $texto
            </div>";
    }
        
?>