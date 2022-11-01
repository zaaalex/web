<?php
session_start();

if (!empty($_SESSION['info'])) {
  print_r($_SESSION['info']);
}
else {
    echo "Данные не сохранены";
}
?>

<form action="index.php" method="post">
    <input type="submit" value="Назад">
</form>