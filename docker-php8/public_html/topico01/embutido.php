<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embutido</title>
    <style>
        .blue{
            color:blue;
        }
    </style>
</head>
<body>
    <div class="principal">
        <h1>Quadrados</h1>
        <p>
            <?php
                $j = 1;
                while ($j <= 20):
                    $quadrado =$j*$j;
            ?>

            O quadrado de <?= $j ?> é <?= $quadrado ?> <br>

            <?php
                    $j++;
                endwhile;

                $nome = "Milena";
                $sobrenome = "Ventura";
                
            ?>     
            <h2 class = "blue"><?= "$nome $sobrenome"; ?></h2>
        </p>
    </div>
</body>
</html>