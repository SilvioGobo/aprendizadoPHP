<?php 
    $grade = "A";

    switch($grade){
        case "A":
            echo "Awesome!";
            break;
        case "B":
            echo "Really good!";
            break;
        case "C":
            echo "Good!";
            break;   
        case "D":
            echo "Not too good!";
            break;
        case "F":
            echo "You failed! :(";
            break;
        default:
            echo "{$grade} is not valid";        
    }


?>