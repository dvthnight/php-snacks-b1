<?php

    $numeri=[];
    echo "I numeri sono: <br>";
    for($i=0; $i<15; $i++){
        $random = rand(0,100);
        if(in_array($random,$numeri)){
            $numeri[$i] = $random;
            $i--;
        } else{
            $numeri[$i] = $random;
        }
    };

    for($j=0; $j<15; $j++){
        echo "$numeri[$j] <br>";
    }



    