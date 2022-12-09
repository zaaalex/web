<?php
include_once __DIR__ . "/../boot.php";

$allFieldsNotEmpty = !empty($_POST['category']) && !empty($_POST['email'] && !empty($_POST['title']) && !empty($_POST['description']));
if ($allFieldsNotEmpty) {
    $category = $_POST['category'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $connection = getDatabaseConnection();

    $connection->query("INSERT INTO advert (category, email, title, description) 
                          VALUES('${category}', '${email}', '${title}', '${description}')");

    echo "Ваше объявление успешно добавлено!";
} else {
    echo "ERROR: Не все поля запроса заполнены!";
}
?>

<form action="index.php" method="post">
    <input type="submit" value="Назад">
</form>