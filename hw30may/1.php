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
<a href="2.php">2 page</a>
<a href="3.php">3 page</a>
<a href="4.php">4 page</a>
