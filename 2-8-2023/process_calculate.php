<?php

session_start();

$number1=$_GET["number1"];
$number2=$_GET["number2"];
$oprate=$_GET["oprate"];
$calculate=0;
$_SESSION["result"]=$calculate;


if($oprate==="+"){
  
$calculate=$number1+$number2;
$_SESSION["result"]=$calculate;
header("location:calculate.php");

}else if($oprate==="-"){
    $calculate=$number1-$number2;
$_SESSION["result"]=$calculate;
header("location:calculate.php");

}else if($oprate==="/"){
    $calculate=$number1/$number2;
$_SESSION["result"]=$calculate;
header("location:calculate.php");


}else if($oprate==="*"){
    $calculate=$number1*$number2;
$_SESSION["result"]=$calculate;
header("location:calculate.php");

}

?>