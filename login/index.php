<?php
    session_start();
    if(isset($_SESSION['user'])) {
        header('Location: /');
    }
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $password = $_POST['password'];
        $login = $_POST['login'];
        $connect = mysqli_connect('localhost', 'root', '', 'minecraft-web-platform');
        $zapytanie = "SELECT * FROM users WHERE login='$login' && password = '$password'";
        $wynik = mysqli_fetch_array(mysqli_query($connect, $zapytanie));
        if ($wynik == NULL) {
            echo "niepoprawne dane logowania";
        }else if ($wynik['login'] == $login) {
            $_SESSION['user'] = $wynik;
            header('Location: /');
        }
        mysqli_close($connect);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/css/header.css">

</head>
<body>
    <?php
        include("../elements/header/header.php");
    ?>
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
    <script src='/assets/js/burgerOpenClose.js'></script>
</body>
</html>