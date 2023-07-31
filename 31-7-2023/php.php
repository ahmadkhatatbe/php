<?php


$year = 2013;
if ($year %4 ==0) {
echo 'The year is a leap year ';
 
}else{
echo 'The year is not a leap year ';

}

echo "<br>";
echo "<br>";
echo "<br>";

$temperature =20;
if ($temperature >20) {
echo 'It is summertime ';
 
}else{
echo 'It is winter time ';

}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$num1=20;
$num2=10;
if($num1===$num2){
$sum=($num1+$num2)**3;
echo "the sum is = ".$sum;
}else{
echo "it is not the same number";

}

echo "<br>";
echo "<br>";
echo "<br>";
$num1 = 10;
$num2 = 10;
$sum =($num1 + $num2);
if($sum == 30){
    echo "true" ;
}else{
    echo "false";
}
echo "<br>";
echo "<br>";
echo "<br>";

$num=20;
if($num %3==0){
    echo "true";
}else{
    echo "false";
}


echo "<br>";
echo "<br>";
echo "<br>";
$num=35;
if($num>=20 && $num<=50){
    echo "true";

}else{
    echo "false";
}

echo "<br>";
echo "<br>";
echo "<br>";

$num1=1;
$num2=5;
$num3=7;
if($num1>$num2 && $num1>$num3){
    echo " the largest number $num1";
}else if($num2>$num1 && $num2>$num3){
    echo " the largest number $num2;";
}else if ($num3>$num1 && $num3>$num2){
    echo " the largest number $num3";
}

echo "<br>";
echo "<br>";
echo "<br>";
$num=100;
if($num<=50){
$sum=$num*2.5;
echo $sum;

}else if($num<=100){
$sum= (($num-50)*5) +(50*2.5);
echo $sum;

}else if($num<=250){
    $sum= (($num-150)*6.2)+(100*5) +(50*2.5);
echo $sum;

}else if($num>250){
        $sum=(($num-250)*7.5)+((250)*6.2)+(100*5) +(50*2.5);
echo $sum;
}

echo "<br>";
echo "<br>";
echo "<br>";

