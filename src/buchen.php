<?php
require_once('database.php');

createOrder(
    $_POST['boot_id'],
    $_POST['name'],
    $_POST['email'],
    $_POST['date'],
    $_POST['time'],
    $_POST['user_id'],
);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
