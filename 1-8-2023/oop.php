<?php


class cars{


public $name;
public $make;
public $model;
public $year;

function setName($name){
    $this->name=$name;
    return $name;
}
function getName(){
    return $this->name;
}

function setMake($make){
    $this->make=$make;
    return $make;
}
function getMake(){
    return $this->make;
}
function setModel($model){
    $this->model=$model;
    return $model;
}
function getModel(){
    return $this->model;
}

function setYear($year){
    $this->year=$year;
    return $year;
}
function getYear(){
    return $this->year;
}
    
}
$BMW=new cars();
$BMW->setName("BMW");
$BMW->setModel("650");
$BMW->setmake("Germany");
$BMW->setyear("2020");


echo "the Name car is :". $BMW->getName();
echo "<br>";
echo "the location of company :" .$BMW->getMake();
echo "<br>";

echo"the model of this car :" .$BMW->getModel();
echo "<br>";

echo "the year of this car is :" .$BMW->getYear();
echo "<br>";



class MyDestructableClass 
{
    function __construct() {
        print "In constructor\n";
    }

    function __destruct() {
        print "Destroying " . __CLASS__ . "\n";
    }
}

$obj = new MyDestructableClass();
