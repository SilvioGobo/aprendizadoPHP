<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_arrays.php" method="post">
        <label>Region:</label>
        <input type="text" name="region">
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php 
    // associative array = An array made of key=> value pairs
    // countries => capitals
    // id => username
    // item => price

    $states = array(
            "MS"=>"Campo Grande", 
            "RS"=> "Porto Alegre", 
            "MG"=>"Belo-Horizonte"
            );

    // if you need one the values of the key
    //echo $states["MS"]. "<br>";
    //echo $states["RS"]."<br> <br>";
    
    //To print all the keys os the $capitals use foreach

    // use key (chave) and associative values(valores associados)
    //example: $estado: key == MS. Value == Mato Grosso do Sul.

    //foreach($states as $key => $value){
    //    echo "{$key} - {$value} <br>";
    //}

    $nome = $states[$_POST["region"]];

    echo "The capital is {$nome}";
    
?>