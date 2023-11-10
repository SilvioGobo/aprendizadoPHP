<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math_functions.php" method="post">
        <label>x:</label> <br>
        <input type="text" name="x"> <br>
        <label>y:</label> <br>
        <input type="text" name="y"> <br> 
        <label>z:</label> <br>
        <input type="text" name="z"> <br> <br>
        <input type="submit" value="total"><br> <br>
    </form>
</body>
</html>
<?php 
    $total = null;
    $x = $_POST["x"]??0;
    $y = $_POST["y"]??0;
    $z = $_POST["z"]??0;
    //$total = abs($x); absolute value
    //$total = round($x); round value -> 4.6 = 5
    //$total = floor($x); //down value -> 4.9 = 4
    //$total = ceil($x); //up value -> 4.1 = 5
    //$total = pow($x, $y); x^y
    //$total = sqrt($x); raiz
    //$total = max($x, $y, $z); max number
    //$total = min($x, $y, $z); min number
    //$total = pi();
    //$total = rand(0, 1000); randomizer number
   
    ?>