<?php
/*Дан текстареа и кнопка. В текстареа вводится текст. По
нажатию на кнопку выведите количество слов и количество
символов в тексте.*/
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Тег TEXTAREA</title>
</head>
<body>

<form action="count.php" method="post">
    <p><b>Enter text:</b></p>
    <p><textarea rows="10" cols="45" name="text"></textarea></p>
    <p><input type="submit" value="calculate"></p>
</form>

</body>
</html>