<?php 

$myArray = array('Hello','potatoe');
print_r($myArray); 

echo '<br>';

$myNumberArray = array(1,1.4);
print_r($myNumberArray); 

echo '<br>';

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
print_r($cars); 

echo '<br>';

echo count($myArray);

echo '<br>';

print_r(array_merge($myArray,$myNumberArray)); 

echo '<br>';

echo end($myArray);

echo '<br>';

array_push($myArray,':)');
print_r($myArray);
?>