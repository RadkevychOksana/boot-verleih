<?php

require_once('database.php');

$firsName = filter_var(trim($_POST['first_name']));
$lastName = filter_var(trim($_POST['last_name']));
$email = filter_var(trim($_POST['email_form']));
$password = filter_var(trim($_POST['password_form']));

if (mb_strlen($password) < 8 || mb_strlen($password) > 12) {
    echo "Password ist nicht valid";
    exit();
}

$result = creatUser($firsName, $lastName, $email, $password);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
