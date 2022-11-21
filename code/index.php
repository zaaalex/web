<?php
/*Написать доску объявлений. Пользователь указывает свой
email, текст объявления, заголовок объявления (форма),
категория. Для хранения объявлений использовать файлы.*/

session_start();
?>

<?php

$category = scandir(__DIR__ . '/data');
$category = array_slice($category, 2);

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
        foreach ($category as $choose) {
            echo "<option value='$choose'>$choose</option>";
        }
        ?>
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
        $mysqli = new mysqli('db', 'root', 'helloworld', 'web');
        if (mysqli_connect_errno()){
            throw new \RuntimeException(mysqli_connect_error());
        }

    $result = $mysqli->query("SELECT * FROM advert");
    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
        </tr>
        <?php
    }
    ?>
</table>
</html>