
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="process_calculate.php" method="GET">
<label for="number">value 1 :</label>
<input type="number" name="number1" required><br>
<label for="number2">number2</label>
<input type="number" name="number2" required><br>
<label for="oprtaion">oprtaion</label>
<input type="text" name="oprate" required><br>

<input type="submit" value="calculate">
</form>

</body>
</html>
<?php

echo"<p> the reuslt is" . $_SESSION["result"] ."</p>";
