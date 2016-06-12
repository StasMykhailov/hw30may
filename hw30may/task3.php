<?php
if (isset($_POST['exit'])) {
    setcookie('user', '', time() - 1);

}
if( isset($_POST['login']) && !empty($_POST['login']) &&
        isset($_POST['pass']) && !empty($_POST['pass']) &&
            isset($_POST['email']) && !empty($_POST['email'])) {
    $cookieHash = md5($_POST['login'] . $_POST['email'] . $_POST['pass']);
    setcookie('user', $cookieHash);
}

?>

<form method="post">
    <label>Enter your login</label>
    <label><input type="text" name="login">Enter your email</label>
    <label><input type="text" name="email">Enter your password</label>
    <input type="text" name="pass">
    <input type="submit" name="user">
    <?php
    if (isset($_COOKIE['user']) && !isset($_POST['exit'])) {
        echo '<input type="submit" name="exit" value="exit">';
    }

    ?>
</form>

