<?php
$a = 2;
$b = 2;
$c = -3; 
$d = ($b * $b) - 4 * $a * $c;
if( sqrt($d) < 0 ){
echo "Нет корней";
}
elseif(sqrt($d) == 0){
 $x = -$b/2 *$a;
 echo "Один корень".$x;
}
else{
    $x1 = -$b +  sqrt($d)/2 * $a;
    $x2 =  -$b -  sqrt($d)/2 * $a;
    echo "Два корня".$x1,$x2;
}
