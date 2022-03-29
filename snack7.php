<?php

    $classe = [
        [
            "nome" => "Giuseppe",
            "cognome" => "Pasqualini",
            "voti" => ["6","7","4","5"],
        ],
        [
            "nome" => "Anna",
            "cognome" => "Rossi",
            "voti" => ["4","7","8","5"],
        ],
        [
            "nome" => "Mirco",
            "cognome" => "Gianduia",
            "voti" => ["6","9","6","6"],
        ],
        [
            "nome" => "Marta",
            "cognome" => "Brambilla",
            "voti" => ["6","7","7","8"],
        ],
    ];

    for($i=0; $i<count($classe); $i++){
        $media= (array_sum($classe[$i]["voti"]) / count($classe[$i]["voti"]));

        echo "Nome: {$classe[$i]["nome"]}    Cognome: {$classe[$i]["cognome"]}    Media: $media <br>";
    };


