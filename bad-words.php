<?php

$badword = $_GET['badWord'];
$paragraph = $_GET['paragraph'];
$originalLength = strlen($paragraph);


$newParagraph = str_replace($badword, '***', $paragraph);
$newlLength = strlen($newParagraph);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="original-paragraph">
        <h1>Paragrafo originale</h1>
            <p>
                <?= $paragraph ?>
            </p>
            <p>Il pargrafo originale era lungo <?= $originalLength ?> caratteri </p>    
    </div>

    <div class="new-paragraph">
        <h1>Paragrafo censurato</h1>

        <p>
            <?= $newParagraph ?>
        </p>

        <p>Il pargrafo censurato è lungo <?= $newlLength ?> caratteri </p>    

    </div>


</body>
</html>