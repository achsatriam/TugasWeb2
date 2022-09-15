<?php

if(isset($_POST["submit"])){
    if($_POST["username"] == "siswa" && $_POST["password"] == "123"){
        header("Location: siswa.php");
        exit;
    } else if($_POST["username"] == "admin" && $_POST["password"] == "456"){
        header("Location: admin.php");
    } else {
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>LOGIN USER</h3>
<form action="" method="post">
    <label for="nama">Username :</label>
    <input type="text" name="username" id="username">
    <br>
    <br>

    <label for="nama">Password :</label>
    <input type="password" name="password" id="password">
    <br>
    <?php
        if(isset($error)){
            echo "username atau password anda salah!!";
        } else {

        }
    ?>
    <br>
    <button name="submit" type="submit">Login</button>
    <br>
</form>
</body>
</html>