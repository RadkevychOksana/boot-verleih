<?php
$email = filter_var(trim($_POST['email_form']));
$password = filter_var(trim($_POST['password_form']));

require_once('database/database.php');

$user = authUser(
    $_POST['email_form'],
    $_POST['password_form']
);
if (!isset($user)) {
    echo "User not found";
    exit();
  }
 setcookie('user', $user['email_form'],time()+3600,"/");

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
