<?php 
    $age = 110;
    if($age >= 100){
        echo "You are too old to enter this site";
    }
    elseif ($age >= 18){
        echo "You may enter this site!";
    }
    elseif($age <= 0){
        echo "That wasn't a valid age!";
    }
    elseif($age >= 100){
        echo "You are too old to enter this site";
    }
    else{
        echo"You must be 18+ to enter";
    }

    // && = True if both conditions are true
    // || = True if at least one condition is true
    // ! = True if false. False if true.
?>