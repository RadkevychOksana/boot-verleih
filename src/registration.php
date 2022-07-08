<?php

require_once('database.php');

$firsName =
    trim($_POST['first_name']);
$lastName =
    trim($_POST['last_name']);
$email =
    trim($_POST['email_form']);
$password =
    trim($_POST['password_form']);

if (mb_strlen($password) < 8 || mb_strlen($password) > 12) {
    echo "Password ist nicht valid";
    exit();
}

$result = creatUser($firsName, $lastName, $email, $password);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
