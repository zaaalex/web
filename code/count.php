<?php

if (!empty($_POST['text'])) {

    $text = $_POST['text'];
    $words = str_word_count($text);
    $symbols = strlen($text);

    echo "Количество слов: " . $words . "\n";
    echo "Количество символов: " . $symbols;
}
?>

<form action="index.php" method="post">
    <input type="submit" value="Назад">
</form>