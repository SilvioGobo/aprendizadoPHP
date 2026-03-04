<?php 
    //strings
    $name = "Bro Code";
    $food = "Pizza";
    $email = "fake@gmail.com";
    //ints
    $age = 21;
    $users = 2;
    $quantity = 4;
    //floats
    $gpa = 2.5;
    $price = 5.99;
    $taxRate = 5.1;
    //booleans
    $employed = true;
    $online = false;
    $forSalel = true;

    $total = null;

    echo"Hello {$name}<br>";
    echo"You like {$food}<br>";
    echo"Your email is {$email}<br>";

    echo"You are {$age} years old<br>";
    echo"There are {$users} online<br>";
    echo"You would like to buy {$quantity} items<br>";
    
    echo"Your gpa is {$gpa}<br>";
    echo"Your pizza is \${$price}<br>";
    echo"The sales tax rate is: {$taxRate}%<br>";

    echo"Online status: {$online}<br>";

    echo "You ordered {$quantity} x {$food}s <br>";
    $total = $quantity * $price;
    echo "Your totals is: \${$total}";
?>