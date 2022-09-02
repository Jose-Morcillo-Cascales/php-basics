<?php 
 function absoluteValue($i){
    return abs($i);
}

$absabsoluteValue =absoluteValue(-7);
echo $absabsoluteValue;

echo '<br>';

function roundValue($i){
    return round($i);
}
    
$roundValue =roundValue(3.6);
echo $roundValue;

echo '<br>';

function maxValue($i,$j){
    return max($i,$j);
}
    
$maxValue =maxValue(3,6);
echo $maxValue;

echo '<br>';


function minValue($i,$j){
    return min($i,$j);
}
    
$minValue =minValue(3,6);
echo $minValue;

echo '<br>';

function randValue($i,$j){
    return rand($i,$j);
}
    
$randValue =randValue(3,6);
echo $randValue;

?>