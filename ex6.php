<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 

    $nombre = 5;
    $puissance = 2;
    $resultat = 5;

    for ($i = 0; $i < $puissance ; $i++)
    {
     $resultat = $resultat * $nombre;
    }

    echo $resultat;
    ?>

</body>
</html>