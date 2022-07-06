<?php
require_once('database/database.php');

createOrder(
    $_POST['boot_id'],
    $_POST['name'],
    $_POST['email'],
    $_POST['date'],
    $_POST['time']
);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
