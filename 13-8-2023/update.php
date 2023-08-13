<?php
include("connectdatabase.php");

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
   
    $selectitem="SELECT * FROM product_information WHERE ID=$id"; 
   $result = $mysqli->query($selectitem);

        $row = $result->fetch_assoc();
        $name=$row['name_product'];
        $category=$row['Category'];
        $price=$row['price'];                          
    
   if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=$_POST['name'];
$category=$_POST['category'];
$price=$_POST['price'];          


$update="UPDATE `product_information` SET name_product='$name', category='$category',price='$price'WHERE ID=$id";
$updated=$mysqli->query($update);

header("location:task1.php");
}

   };
   

   



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table{
    width: 100%;
    margin-top: 80px;
}
td{
    text-align: center;
    padding-top: 50px;
}
h1{
    text-align: center;
    font-size: 30px;
}
*{
    font-size: 20px;
}
form input[type=text]:nth-child(1){
    width: 48%;
    height: 40px;
    margin-bottom: 20px;
    padding-left: 10px;
   
}
form input[type=text]:nth-child(2){
    width: 48%;
    height: 40px;
    margin-bottom: 20px;
    padding-left: 10px;
}
form input[type=number]:nth-child(4){
    width: 97.4%;
    height: 40px;
    margin-bottom: 20px;
    padding-left: 10px;
   
}
form input[type=submit]:nth-child(6){
    width: 98.4%;
    height: 40px;
    margin-bottom: 20px;
    padding-left: 10px;
}

    </style>
</head>
<body>
    <h1>Update</h1>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
<input type="text" name="name" placeholder="Enter name product" value="<?php echo htmlspecialchars($name); ?>">
<input type="text" name="category" placeholder="Enter category" value="<?php echo htmlspecialchars($category); ?>"><br>
<input type="number" name="price" placeholder="Enter price" value="<?php echo htmlspecialchars($price); ?>"><br>
<input type="submit" value="Update">
</form></div>
</body>
</html>

