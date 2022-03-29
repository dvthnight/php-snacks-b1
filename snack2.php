<?php

    $nome = $_GET["nome"];
    $mail = $_GET["mail"];
    $età = $_GET["età"];

    if(isset($_GET["nome"])&& isset($_GET["mail"])&& isset($_GET["età"])){
        if(strlen($nome)>3 && strpos( $mail,"@") && strpos( $mail, ".", -4) && is_int($età)){
            echo "Acesso riuscito";
        } else {
            echo "Accesso negato";
        }
    } else{
        echo "Manca un parametro";
    }