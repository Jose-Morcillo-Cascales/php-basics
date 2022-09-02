<?php 

function sum($a,$b){
    return $a+$b;
}
echo sum(3,2);

echo "<br>";

function multiplication($a,$b){
    return $a*$b;
}
echo multiplication(3,2);

echo "<br>";

function division($a,$b){
    return $a/$b;
}
echo division(4,2);

echo "<br>";

function operation($a,$b,$c){
  switch($c){
    case "+":
        echo  sum($a,$b);
        break;
    case "*":
        echo multiplication($a,$b);
        break;
    case "/":
        echo division($a,$b);
        break;
  }
}
echo operation(4,2,"+");
?>