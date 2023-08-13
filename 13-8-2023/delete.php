<?php
include("connectdatabase.php");
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
   
$delete="DELETE FROM `product_information` WHERE `ID` = $id";
$deletefield=$mysqli->query($delete);

}header("location:task1.php");


?>