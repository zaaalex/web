<?php

session_start();

$mysqli = new mysqli('db', 'root', 'helloworld', 'web');
if (mysqli_connect_errno()){
    throw new \RuntimeException(mysqli_connect_error());
}

?>
<!doctype html>
<head>
    <title>Task3</title>
</head>
<html>
<h1>Добавить объявление:</h1>
<form action="calculate.php" method="post">
    <select name="category">
        <?php
        $result = $mysqli->query("SELECT * FROM category");
        while($row = $result->fetch_assoc()){ ?>
           <option value=<?=$row["category_name"]?>><?=$row["category_name"]?></option>
        <?php } ?>
    </select>
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="title" placeholder="Заголовок объявления">
    <textarea name="description" cols="30" rows="10" placeholder="Текст объявления"></textarea>

    <input type="submit" value="Добавить">
</form>

<h1>Доска объявлений:</h1>

<table style="border: seagreen", border="1">
    <tr>
        <th>category</th>
        <th>email</th>
        <th>title</th>
        <th>description</th>
    </tr>
    <?php

    $result = $mysqli->query("SELECT * FROM advert");
    while($row = $result->fetch_assoc()){ ?>
        <tr>
            <td><?= $row['category'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['title'] ?></td>
            <td><?= $row['description'] ?></td>
        </tr>
    <?php } ?>
</table>
</html>