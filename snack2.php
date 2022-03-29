<?php

    $nome = $_GET["nome"];
    $mail = $_GET["mail"];
    $eta = $_GET["eta"];

    echo "NOME: ";
    echo (isset($_GET["nome"]) ? 'SI' : 'NO');

    echo "<br>MAIL: ";
    echo (isset($_GET["mail"]) ? 'SI' : 'NO');

    echo "<br>ETA: ";
    echo (isset($_GET["eta"]) ? 'SI' : 'NO');
    
    echo "<br>";

    if(isset($_GET["nome"])&& isset($_GET["mail"])&& isset($_GET["eta"])){
        if(strlen($nome)>3 && strpos( $mail,"@") && strpos( $mail, ".", -4) && is_numeric($eta)){
            echo "Acesso riuscito";
        } else {
            echo "Accesso negato";
        }
    } else{
        echo "Manca un parametro";
    }