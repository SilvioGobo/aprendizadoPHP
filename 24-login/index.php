<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Username:</label> <br>
        <input type="text" name="username"> <br>
        <label>Password:</label> <br>
        <input type="password" name="password"><br> <br>
        <button type="submit" name="submit" value="submit">submit</button>
    </form>
</body>
</html>
<?php 

    if(!empty($_POST["submit"])){
        if(!empty($_POST["username"])){
        }else{
            echo"Please, check the username! <br>";
        }
        if(!empty($_POST["password"])){
        }else{
            echo "Please, check the password!<br>";
        }

    }
    $user = $_POST["username"]??null;
    $password = $_POST["password"]??null;
    


    echo $user . "<br>" . $password . "<br>";
?>