<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    </style>
</head>
<body>
    <?php
$r = rand(50,100);
$d = rand(60,100);
define("PI",3.14, true); 
 $s = pi * ($r * $r);
echo "<div id=\"circle\" style=\"width:{$d}px;height:{$r}px;border-radius:50%;border: 2px solid red;\"></div>";
echo "Площадь круга"." ".$s


?>
</body>
</html>

