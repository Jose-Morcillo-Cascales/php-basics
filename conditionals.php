<?php 
$weekDay= date("l");
if($weekDay == "Monday"){
    echo "today is $weekDay";
}

echo '<br>';

$month= date('m');
if($month == "October"){
    echo "We are in October";
} else {
    echo $month;
}

echo '<br>';

$minute= date('i');
if($minute<10){
    echo 'the current minute is less than 10';
}else if($minute>15){
    echo 'the current minute is more than 15';
}else{
    echo 'holi';
}

echo '<br>';

switch ($weekDay) {
    case "Monday":
        echo "1";
        break;
    case "Tuesday":
        echo "2";
        break;
    case 'Wensday':
        echo "3";
        break;
    case "Thursday":
        echo "4";
        break;
    case "Friday":
         echo "5";
        break;
    case 'Saturday':
        echo "6";
        break;
    case 'Sunday':
        echo "7";
        break;
}

?>