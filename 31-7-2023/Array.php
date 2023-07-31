<?php

$colors = array('white', 'green', 'red');
foreach ($colors as $key => $value) {
    echo "$colors[$key]";
    echo"<br>";
}
    echo"<br>";
    echo"<br>";

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
 "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
  "Finland"=>"Helsinki", "France" => "Paris",
   "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
   "Germany" => "Berlin", "Greece" => "Athens",
    "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
     "Portugal"=>"Lisbon", "Spain"=>"Madrid" );


    foreach ($cities as $key => $value) {
        if($key==="Netherlands"){
     echo "The cabital of Netherlands is $value";
    echo "<br>";

    }
    if($key==="Greece"){
     echo "The cabital of Greece is $value";
    echo "<br>";

    }

if($key==="Germany"){
     echo "The cabital of Germany is $value";}
    echo "<br>";

    }

    
        echo "<br>";

    echo "<br>";
  
$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 

     
echo $color[4];
echo "<br>";
echo "<br>";

$fruits=array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");

asort($fruits);
print_r($fruits);

$temperature= array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74,
 62, 62, 65, 64, 68, 73, 75, 79, 73);
 $len=count($temperature);
 $low=[];
$large=[];
$average=0;
 for($i=0; $i <$len ; $i++) { 
    if($temperature[$i]<65){
        Array_push($low,$temperature[$i]);

    }if($temperature[$i]>=75){
                Array_push($large,$temperature[$i]);

    }
    
 };
  echo "<br>";
 echo "<br>";

 echo "list of lowest temperature:";
 foreach ($low as $key => $value) {
      echo " ".$value;

 }
 echo "<br>";
 echo "list of largest temperature:";
 foreach ($large as $key => $value) {
      echo " ".$value;

 }


 $array1= array("color"=>"red",2,4);
$array2=array("a","b","color"=>"green","shape"=>"trapezoid",4);


echo "<br>";
 echo "<br>";

 $words= array("abcd","abc","de","hjjj","g","wer");
 $len=count($words);
 $short;
 $long;
 for ($i=0; $i < $len; $i++) { 
    if (strlen($words[0])>strlen($words[$i])) {
        $long=strlen($words[0]);
    }if(strlen($words[4]!=strlen($words[$i])))
                $short=strlen($words[4]);

 }

echo"the short  is$short";
echo"<br>";
echo" the long is $long";

echo"<br>";
