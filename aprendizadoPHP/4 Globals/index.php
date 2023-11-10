<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
        <label>Quantity:</label><br>
        <input type="text" name="quantity"><br> <br>
         <input type="submit" value="total"> <br> <br>
    </form>
</body>
</html>
<?php 
    //echo $_POST["username"]."<br>";
    //echo $_POST["password"]."<br>";
    $item = "pizza";
    $price = 4.99;
    $quantity = $_POST["quantity"]??0;
    $total = null;
    
    //final price
    $total = $quantity * $price;

    echo "You have ordered {$quantity} {$item}s <br>";
    echo "Yor total is: \${$total} <br>";
    
?>


