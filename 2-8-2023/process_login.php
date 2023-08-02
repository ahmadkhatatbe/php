<?php


session_start();

$name="ahmed";
$email="ahmed@gmail.com";
$password="123456789";
$_SESSION["is_log_in"]=true;

$nameform=$_GET["username"];
$emailform=$_GET["email"];
$passwordform=$_GET["password"];


if($nameform === $name &&$emailform===$email&&$passwordform===$password){
    header("location:calculate.php");


}else{
header("location:login.php");
exit;
}


