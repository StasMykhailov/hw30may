<?php
if (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
}
if (isset($name)) {
    echo "Your name is ".$name."</br>";
}
?>
<a href="task2_1.php">1-ST PAGE</a>
