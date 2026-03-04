<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="creditCard" value="Visa">
        Visa <br>
        <input type="radio" name="creditCard" value="Mastercard">
        Mastercard <br>
        <input type="radio" name="creditCard" value="American Express">
        American Express <br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php 

    if(isset($_POST["confirm"])){
        if(isset($_POST["creditCard"])){
            $creditCard = $_POST["creditCard"];
            echo "You selected {$creditCard}";
        }
        else{
            echo "Please, select a credit card!";
        }
    }
    
?>