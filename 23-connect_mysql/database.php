<?php 
    $db_server = "localhost";
    $d_user = "root";
    $db_pass ="";
    $db_name = "teste";
    $connection = "";

    $connection = mysqli_connect($db_server,$d_user,$db_pass,$db_name);

    if($connection){
    }
    else{
        echo "You are not connected!";
    }
?>