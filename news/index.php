<?php
    session_start();
    $bdConnect = mysqli_connect('localhost', 'root', '', 'minecraft-web-platform');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/css/header.css">

</head>
<body>
    <?php
        include("../elements/header/header.php");
    ?>

    <h1>news</h1>    
    <?php
        $question = "SELECT `id`, `heading`, `text`, `author`, `date` FROM news ORDER BY id DESC";
        $queryResult = mysqli_query($bdConnect, $question);
        while ($row = mysqli_fetch_array($queryResult)) {
            echo "<h2>{$row['heading']}</h2>";
            echo "<p>{$row['text']}</p>";
            echo "<p>ID: {$row['id']} | Автор: {$row['author']} | Дата: {$row['date']}</p>";
            echo "<hr>";
        }
    ?>
    <script src='/assets/js/burgerOpenClose.js'></script>

</body>
</html>
<?php
    mysqli_close($bdConnect);
?>