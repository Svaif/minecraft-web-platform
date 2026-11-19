<?php
    session_start();
    if (isset($_POST['logOut'])) {
        unset($_SESSION['user']);
        session_destroy();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/header.css">

</head>
<body>
    <header>
        <a href="/index.php">Logo</a>
        <button class="burger" onclick="burgerOpenClose()">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </header>
    <nav id="navigation" style='visibility: hidden; opacity: 0;'>
        <a href="">home</a>
        <a href="">rules</a>
        <a href="">news</a>
        <?php
            if (!isset($_SESSION['user'])) {
                echo '<a href="./login/">login</a>';
            }else{
                echo '<form method="post">';
                echo '    <button name="logOut">log out</button>';
                echo '</form>';
            }
        ?>
        
    </nav>
    <main>
        
    </main>
    <footer>

    </footer>
    <script src='./assets/js/burgerOpenClose.js'></script>
</body>
</html>