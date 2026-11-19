<?php
    session_start();
    if(isset($_SESSION['user'])) {
        header('Location: ../');
    }
    if (isset($_POST['login']) && isset($_POST['password'])) {

        if ($_POST['login'] == 'admin' && $_POST['password'] == '123123') {
            $_SESSION['user'] = 'admin';
            header('Location: ../');
        }else{
            echo 'Wrong password or login';
        }


    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>
            <input type="text" name="login"> login
        </label>
        <br>
        <label>
            <input type="password" name="password"> password
        </label>
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>