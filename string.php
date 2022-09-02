<?php 
$myString=' holi';
echo $myString;

echo '<br>';

echo  "I said  $myString";

echo '<br>';

echo  "He said" . $myString;

echo '<br>';

echo str_replace('h','j',$myString);

echo '<br>';

$mySecondString='Holi holi';

echo str_replace('h','j',$mySecondString);

echo '<br>';

echo str_repeat($myString,4);

echo '<br>';

echo strlen($myString);

echo '<br>';

echo strpos($myString,'h');

echo '<br>';

echo ucfirst('hello');

echo '<br>';

echo strtoupper($myString);

echo '<br>';

echo strtolower($mySecondString);

echo '<br>';

echo substr($myString, -1);

?>