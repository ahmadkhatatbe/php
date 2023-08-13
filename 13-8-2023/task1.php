<?php    
 include("connectdatabase.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST["name"]=="" && $_POST["category"]=="" && $_POST["price"]==""){
        
  
    } else  {
        $name = $_POST["name"];
        $category = $_POST["category"];
        $price = $_POST["price"];

$insert="INSERT INTO product_information (name_product,Category,price) VALUES('$name','$category','$price')";
$insertin = $mysqli->query($insert); 
     $name =""; 
$category="";
 $price="";
    }

}

else{
   
}
$sql="SELECT ID,name_product,Category ,price FROM product_information";

   



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
    <div>

<form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
<input type="text" name="name" placeholder="Enter name product">
<input type="text" name="category" placeholder="Enter category"><br>
<input type="number" name="price" placeholder="Enter price"><br>
<input type="submit" value="Add">
</form></div>
<div class="table">
<table>
<thead>
    <tr>
        <th>id</th>
        <th>productName</th>
        <th>Category</th>
         <th>price</th>
          <th>Update</th>
          <th>Delete</th>

    </tr>
</thead>
<tbody>
    <?php
   $result = $mysqli->query($sql);
  if ($result) {
    if ($result->num_rows > 0) {
   
while($row=$result->fetch_assoc()){
echo <<<Here
<tr>
        <td>$row[ID]</td>
        <td>$row[name_product]</td>
        <td>$row[Category]</td>
         <td>$row[price]</td>
          <td><a href="update.php?ID=$row[ID]">Update</a></td>
          <td><a href="delete.php?ID=$row[ID]">Delete</a></td>
          </tr>
          
Here;

}}else{
    echo "no products";

}
}else{
    echo"error";
}
    ?>

</tbody>
</table>
</div>

</body>
</html>