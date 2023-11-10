<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        username: <br>
        <input type="text" name="username"> <br>
        age: <br>
        <input type="number" name="age"> <br>
        Email: <br>
        <input type="email" name="email"> <br>
        <input type="submit" value="login" name="login"> <br>
    </form>
</body>
</html>

<?php 
    if(isset($_POST["login"])){

        //Filter protect your inputs.
        //INPUT_POST = use your method -> method = "post"
        //FILTER_SANITIZE_SOMETHING -> JUST A FILTER
        $username =filter_input(INPUT_POST, "username", 
        FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        if(empty($username)){
            echo "That username wasn't valid! <br>";
        }
        else{
            echo "Your name is {$username} <br>";
        }
        if(empty($age)){
            echo "That age wasn't valid!<br>";
        }
        else{
            echo"You are {$age} years old! <br>";
        }
        if(empty($email)){
            echo "That email wasn't valid!<br>";
        }
        else{
            echo"Your email is: {$email} <br>";
        }
    }
?>

