<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack6</title>
    <style>
        .grigio{
            border: 5px solid grey;
            padding: 20px;
            margin-bottom: 30px;
            max-width: 300px;
        }

        .verde{
            border: 5px solid green;
            padding: 20px;
            margin-bottom: 30px;
            max-width: 300px;
        }
    </style>
</head>
<body>
    <div class="grigio">

        <h3>Insegnanti</h3>
        <?php

            for($i=0;$i<count($db["teachers"]); $i++){
                ?>
                
                <p>
                    <?php echo "Nome: {$db["teachers"][$i]["name"]} Cognome: {$db["teachers"][$i]["lastname"]}"?>
                </p>
                <br>

                <?php
            }

            ?>
    </div>
    <div class="verde">
        <h3>pm</h3>
            <?php

                for($i=0;$i<count($db["pm"]); $i++){
                    ?>
                    
                    <p>
                        <?php echo "Nome: {$db["pm"][$i]["name"]} Cognome: {$db["pm"][$i]["lastname"]}"?>
                    </p>
                    <br>

                    <?php
                }

                ?>
    </div>
</body>
</html>
