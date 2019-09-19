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
//Ex1
$tabSomme = array(5, 78, 23, 13, 12, 56);
$somme = 0;
for($i=0; $i<6; $i++)
{
    $somme = $somme + $tabSomme[$i];
}
echo "La somme est ".$somme;
?>     
</body>
</html>