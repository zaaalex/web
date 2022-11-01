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
    <textarea name="text" cols="30" rows="10" placeholder="Текст объявления"></textarea>

    <input type="submit" value="Добавить">
</form>

<h1>Доска объявлений:</h1>

<table style="border: seagreen", border="1">
    <tr>
        <th>title</th>
        <th>text</th>
        <th>category</th>
    </tr>
    <?php
    foreach ($category as $file)
    {
        $filePath = './data/' . $file;
        $files2 = scandir($filePath);
        $files2=array_splice($files2,2);

        foreach ($files2 as $file2) {
            $filePath2 = './data/' . $file . "/" . $file2;
            $file3 = fopen($filePath2, "r");
            $text = fgets($file3);

            fclose($file3);
            echo "<tr>";
            echo "<td>" . $file2 . "</td>";
            echo "<td>" . $text . "</td>";
            echo "<td>" . $file . "</td>";
            echo "</tr>";
        }
    }
    ?>
</table>
</html>