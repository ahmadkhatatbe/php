<?php


$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
$ahmed = array("khatatbeh","mohammad","mohmoud");

$ahmedlength = count($ahmed);
print_r("$ahmedlength");

for ($i=0; $i < $ahmedlength; $i++) { 
    print("$ahmed[$i]");
    print("<br>");
}


$age = array('type'=>"Tesla",'model'=>2014,'make'=>'America');

foreach ($age as $key => $value) {
    echo "key =". $key .",  value = ,".$value;
    echo"<br>";
}



$threearray = array(

array("ahmed",25,"programming"),
array("murad",27,"engineer"),
array("mohammed",28,"programming"),



);
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

for ($i=0; $i <count($threearray) ; $i++) { 
    for ($j=0; $j <count($threearray) ; $j++) { 
        echo $threearray[$i][$j]."<br>";
    }
    echo "<br>";
}





