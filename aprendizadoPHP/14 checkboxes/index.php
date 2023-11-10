<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="hamburguer" value="Hamburguer">
        Hamburguer <br>
        <input type="checkbox" name="hotdog" value="Hotdog">
        Hotdog <br>
        <input type="checkbox" name="taco" value="Taco">
        Taco <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php 
    if(isset($_POST["submit"])){
        if(isset($_POST["pizza"])){
            echo "You like Pizza! <br>";
        }
        if(isset($_POST["hamburguer"])){
            echo "You like Hamburguer! <br>";
        }
        if(isset($_POST["hotdog"])){
            echo "You like Hotdog! <br>";
        }
        if(isset($_POST["taco"])){
            echo "You like Taco! <br>";
        }
        if(empty($_POST["pizza"])){
            echo "You don't like pizza! <br>";
        }
        if(empty($_POST["hamburguer"])){
            echo "You don't like Hamburguer! <br>";
        }
        if(empty($_POST["hotdog"])){
            echo "You don't like Hotdog! <br>";
        }
        if(empty($_POST["taco"])){
            echo "You don't like Taco! <br>";
        }
    }
    
?>