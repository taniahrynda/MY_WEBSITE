<?php
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', '', 'website');
$result = $mysql->query("SELECT * FROM `customer` WHERE `EMAIL`= '$email' AND `PASS_WORD` = '$password'");
$user = $result->fetch_assoc();

if (count($user) == 0) {
    echo "Такий користувач не знайдений";
    exit();
}

setcookie('customer_id', $user['ID'], time() + 3600, "/");
$mysql->close();

header('Location:/book.html');
?>
