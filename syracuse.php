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
$var = 155;
for($i=0; $i<20; $i++)
{
    if($var%2==0)
    {
        $var = $var/2;
    }
    else
    {
        $var = $var*3+1;
    }
    echo $var;
}


?>
    
</body>
</html>