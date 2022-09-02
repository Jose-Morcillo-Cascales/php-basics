<?php 
$myDate= new DateTime('2000-01-01');
echo date_format($myDate, 'Y-m-d');

echo '<br>';

$today=date("Y-m-d H:i:s");
echo $today;

echo '<br>';

$weekDay= date("l");
print_r($weekDay);

echo '<br>';

$month= date('m');
echo $month;

echo '<br>';

$minute= date('i');
echo $minute;

?>