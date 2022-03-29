<?php

    $partite = [
        [
            "casa" => "Dinamo Sassari",
            "ospite" => "Fortitudo Bologna",
            "punti_casa" => 85,
            "punti_ospite" => 79,
        ],

        [
            "casa" => "Napoli",
            "ospite" => "Brindisi",
            "punti_casa" => 79,
            "punti_ospite" => 69,
        ],

        [
            "casa" => "Trento",
            "ospite" => "Trieste",
            "punti_casa" => 75,
            "punti_ospite" => 74,
        ],

        [
            "casa" => "VL Pesaro",
            "ospite" => "Brescia",
            "punti_casa" => 83,
            "punti_ospite" => 88,
        ],

        [
            "casa" => "Venezia",
            "ospite" => "Derthona",
            "punti_casa" => 69,
            "punti_ospite" => 61,
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack1</title>
</head>
<body>

        <h1>Snack1</h1>
    <?php
        for($i=0; $i < count($partite);$i++){
    ?>
            <div>
                <?php echo "{$partite[$i]["casa"]} - {$partite[$i]["ospite"]} | {$partite[$i]["punti_casa"]} - {$partite[$i]["punti_ospite"]}" ?>
            </div>

            <?php
        }

            ?>
</body>
</html>
