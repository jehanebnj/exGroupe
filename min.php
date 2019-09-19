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
//Ex2
$tabMin = array(53, 56, 10, 130, 45, 58);
$min = $tabMin[0];
for($i=0; $i<6; $i++)
{
    if($tabMin[$i] < $min)
    {
        $min = $tabMin[$i];
    }
}
echo "La plus petite valeur est ". $min;
?>
    
</body>
</html>