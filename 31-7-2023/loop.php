<?php

$total=0;
for ($i=0; $i < 30; $i++) { 
    $total+=$i;
}

echo"The total is $total";

echo"<br>";
$row;
$column;
echo"<br>";

 for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            if ($i == $j) {
                echo $i . " ";
            } else {
                echo "0 ";
            }
           
        } echo"<br>";
        echo PHP_EOL;
    }

    echo"<br>";

$fact=1;
for ($i=1; $i <=5 ; $i++) { 
    $fact*=$i;
}
    echo"<br>";
echo"$fact";
    echo"<br>";
$fact=array(0,1);
    for ($i = 2; $i < 10; $i++) {
        $fact[$i] = $fact[$i - 1] + $fact[$i - 2];
        echo implode(",",$fact);
    }


    echo"<br>";
    $num=1;
for ($i=1; $i <=5; $i++) { 
    for ($j=1; $j <=$i; $j++) { 
       
        echo $num." ";
        $num++;

    } 
    echo "<br>";
    
}