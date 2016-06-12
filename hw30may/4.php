<?php
session_start();
$page = basename(__FILE__);
if (!isset($_SESSION['pages'])) {
    $_SESSION['pages'] = [];
    $_SESSION['pages'][] = $page;
} elseif (!in_array($page, $_SESSION['pages'])) {
    $_SESSION['pages'][] = $page;
}
?>
<a href="1.php">1 page</a>
<a href="2.php">2 page</a>
<a href="3.php">3 page</a>
<h1>You watched this pages:</h1>


<?php foreach ($_SESSION['pages'] as $value ) {
    echo $value."</br>";
}
?>

