<?php

if (!empty($_POST['category']) && !empty($_POST['email'] && !empty($_POST['title']) && !empty($_POST['text']))) {
    $category = $_POST['category'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $text = $_POST['text'];

    $filePath = __DIR__. '/data/' . $category . '/' . $title . '.txt';
    if (!file_exists($filePath)) {
        file_put_contents($filePath, $_POST['text']);
        echo "Объявление успешно добавлено";
    }
    else
    {
        echo "ERROR: Файл с таким названием уже существует!";
    }
}
else
{
    echo "ERROR: Не все поля запроса заполнены!";
}
?>

<form action="index.php" method="post">
    <input type="submit" value="Назад">
</form>