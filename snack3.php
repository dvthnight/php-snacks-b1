<?php

    $posts = [

        '15/01/2022' => [
            [
                'title' => 'Post 1',
                'author' => 'Salvatore Pagano',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Roberto Brambilla',
                'text' => 'Testo post 2'
            ],
        ],
        '21/02/2022' => [
            [
                'title' => 'Post 3',
                'author' => 'Salvatore Pagano',
                'text' => 'Testo post 3'
            ]
        ],
        '29/03/2022' => [
            [
                'title' => 'Post 4',
                'author' => 'Roberto Brambilla',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Salvatore Pagano',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Roberto Brambilla',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    $date = ["15/01/2022","21/02/2022","29/03/2022"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack3</title>
</head>
<body>
    <?php
        for($i=0; $i<count($posts); $i++){
        ?>
            <div>
                <?php echo "Data: $date[$i]"; ?>
            </div>

            <?php
                for($j=0; $j< count($posts[$date[$i]]); $j++){
                    ?>
                    <div>
                        <?php echo "Post: {$posts[$date[$i]][$j]["text"]}";?>
                    </div>
                    <?php
                }
                    ?>

                <br>
            

            <?php
        }

        ?>
</body>
</html>