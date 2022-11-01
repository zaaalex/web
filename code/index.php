<?php
/*На одной странице с помощью формы спросите у
пользователя фамилию, имя и возраст. Запишите эти данные
в сессию. При заходе на другую страницу выведите эти
данные на экран.*/
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