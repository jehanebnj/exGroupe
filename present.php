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
//Ex3
$tabPresent = array(1, 4, 3, 3, 4, 2, 2, 2, 4, 1);
$somme1 = 0;
$somme2 = 0;
$somme3 = 0;
$somme4 = 0;

for($i=0; $i<10; $i++)
{
    if($tabPresent[$i] == 1)
    {
        $somme1 ++;
    }
    if($tabPresent[$i] == 2)
    {
        $somme2 ++;
    }
    if($tabPresent[$i] == 3)
    {
        $somme3 ++;
    }
    if($tabPresent[$i] == 4)
    {
        $somme4 ++;
    }

}
echo "La valeur 1 est présente ".$somme1." fois"; ?> <br> <?php
echo "La valeur 2 est présente ".$somme2." fois"; ?> <br> <?php
echo "La valeur 3 est présente ".$somme3." fois"; ?> <br> <?php
echo "La valeur 4 est présente ".$somme4." fois"; ?> <br> <?php

?>
    
</body>
</html>