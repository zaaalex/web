<?php
include_once __DIR__ . "/../boot.php";

session_start();

$connection = getDatabaseConnection();

?>
<!doctype html>
<html>
<h1>Добавить объявление:</h1>
<form action="addAdvert.php" method="post">
    <select name="category">
        <?php
        $result = $connection->query("SELECT * FROM category");
        if (!$result) {
            header("Location: /error.php");
            throw new RuntimeException(mysqli_errno($connection) . ': ' . mysqli_error($connection));
        }

        while ($row = $result->fetch_assoc()) { ?>
            <option value=<?= $row["category_name"] ?>><?= $row["category_name"] ?></option>
        <?php } ?>
    </select>
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="title" placeholder="Заголовок объявления">
    <textarea name="description" cols="30" rows="10" placeholder="Текст объявления"></textarea>

    <input type="submit" value="Добавить">
</form>

<h1>Доска объявлений:</h1>

<table style="border: seagreen" , border="1">
    <tr>
        <th>category</th>
        <th>email</th>
        <th>title</th>
        <th>description</th>
    </tr>
    <?php

    $result = $connection->query("SELECT * FROM advert");
    if (!$result) {
        header("Location: /error.php");
        throw new RuntimeException(mysqli_errno($connection) . ': ' . mysqli_error($connection));
    }
    while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['category'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['title'] ?></td>
            <td><?= $row['description'] ?></td>
        </tr>
    <?php } ?>
</table>
</html>