<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPool 3</title>
</head>
<body>
    <form action="index.php" method="post">
    <label>Litragem da piscina:</label>
    <br>
    <input type="number" name="litragem"> <br>
    <button>Enviar</button>
    
    </form>
</body>
</html>

<?php 
    foreach($_POST as $key => $value){
        $value = $value/1000;
        echo "Sua piscina tem {$value} MIL litros <br>";
    }
    $chlore = ($_POST["litragem"]??null) * 0.004; 

    echo "Você precisa por {$chlore}G de cloro na piscina uma vez na semana!";
?>