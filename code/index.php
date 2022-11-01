<?php
/*На одной странице с помощью формы спросите у
пользователя фамилию, имя и возраст. Запишите эти данные
в сессию. При заходе на другую страницу выведите эти
данные на экран.*/

session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Тег TEXTAREA</title>
</head>
<body>

<form action="calculate.php" method="post">
    <input type="text" name="surname" placeholder="Фамилия">
    <input type="text" name="name" placeholder="Имя">
    <input type=text name="age" placeholder="Возраст">
    <input type="text" name="salary" placeholder="Зарплата">
    <input type="text" name="color" placeholder="Любимый цвет">
    <input type="submit" value="Сохранить">
</form>

<form action="user.php" method="post">
    <input type="submit" value="На другую страницу">
</form>

</body>
</html>