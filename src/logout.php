<?php
setcookie('user', $user['email_form'], time() - 3600, "/");
setcookie('user_id', $user['id'], time() - 3600, "/");
header('Location: ' . $_SERVER['HTTP_REFERER']);
