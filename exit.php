<?php
 setcookie('user', $user['email_form'],time()-3600,"/");
 header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
