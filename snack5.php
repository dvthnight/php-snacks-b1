<?php

    $paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto iure animi doloremque amet. Saepe possimus quod quae eius, adipisci. Quaerat asperiores fugiat corporis quo distinctio ratione cupiditate ut est. It amet consectetur adipisicing elit. Iusto iure animi doloremque.";

    $frasi = explode(". ", $paragrafo);

    for($i=0; $i<count($frasi); $i++){
        echo "$frasi[$i] <br>";
    }