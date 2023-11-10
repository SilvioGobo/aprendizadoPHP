<?php 
    // Hashing = Transforming sensitive data (password)
    //           into letter, numbers, and/or symbols
    //           via a mathematical process. (similar to encryption)
    //           Hides the original data from 3d parties.

    $password = "pizza123";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    if(password_verify("pizza123", $hash)){
        echo "You are logged in!";
    }
    else{
        echo "Incorrect password";
    }

?>