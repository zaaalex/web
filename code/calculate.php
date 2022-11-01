<?php

session_start();

if (!empty($_POST['surname']) && !empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['salary']) && !empty($_POST['color'])) {
    $_SESSION['info'] = array(
        'surname' => $_POST['surname'],
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'salary' => $_POST['salary'],
        'color' => $_POST['color']
    );
    echo "Данные сохранены";
}
else {
    echo "ERROR: Данные не сохранены!";
}
?>

<form action="user.php" method="post">
    <input type="submit" value="На другую страницу">
</form>
<form action="index.php" method="post">
    <input type="submit" value="Ввести данные">
</form>