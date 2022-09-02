<?php

for($i=0 ;$i<=10; $i++){
    echo $i+1;

}
echo "<br>";

$array=[1,2,3,4,5];
//value = 1,2,3,4,5
foreach ($array as $value){

$value=$value * 3;
    echo $value;
}

echo "<br>";

$i=0;
while ($i <= 5){
    
    echo $i++;
}

echo "<br>";

$j = 0;
do {
    $j =3;
    echo $j ;
} while ($j  > 5)

?>