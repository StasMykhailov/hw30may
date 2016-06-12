<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    setcookie('name', $name);
}
elseif (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
}
if (isset($name)) {
    echo "Your name is ".$name;
}
?>
<form action="" method="post">
    <label for="name">Введите Ваше имя:</label>
    <input type="text" name="name">
    <input type="submit">
</form>
<a href="task2_2.php">2-nd PAGE</a>
