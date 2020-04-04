<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.circle{
    width: 10em;
  height: 10em;
  border: 2px solid red;
  border-radius: 50%;
  background: mistyrose;
} 
    </style>
</head>
<body>
    <?php
$r = 2;
define("PI","3.14", true); 
$s = pi * ($r * $r);
echo "<div class = \"circle\">$s</div>";


?>
</body>
</html>

