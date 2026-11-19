<?php
    session_start();
    $bdConnect = mysqli_connect('localhost', 'root', '', 'news');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>news</h1>    
    <?php
        $question = "SELECT id, newsText, author FROM news ORDER BY id DESC";
        $answer = mysqli_query($bdConnect, $question);
        while ($result = mysqli_fetch_array($answer)) {
            echo "<p>$result[0]</p>";
            echo "<p>$result[1]</p>";
            echo "<p>$result[2]</p>";

        }
    ?>

</body>
</html>
<?php
    mysqli_close($bdConnect);
?>