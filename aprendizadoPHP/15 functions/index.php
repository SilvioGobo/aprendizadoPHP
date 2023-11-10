<?php 
    // function = write some code once, reuse when you need it
    //            type () after function name to invoke
    //            ex. add() subtract() multiply() divide()
    function happyBirthday($firstName, $age){

        echo "happy birthday to {$firstName} you are {$age} years old!<br> <br>";
    }    

    function hypotenuse($a, $b){
        $c = sqrt($a ** 2 + $b ** 2);
        echo "Hypotenuse is: " . $c . "<br> <br>";
        return $c;
    }
        happyBirthday("SpongeBob", 35);
        happyBirthday("Bro", 35);

        hypotenuse(3, 4);
        hypotenuse(7, 9);
?>