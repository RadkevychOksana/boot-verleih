<?php

require_once('database.php');

$email = filter_var(trim($_POST['email_form']));
$password = filter_var(trim($_POST['password_form']));

$user = authUser($email, $password);

if (!isset($user)) {
    echo "User not found";
    exit();
}

setcookie('user_id', $user['id'], time() + 3600, "/");
setcookie('user', $user['email_form'], time() + 3600, "/");

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
