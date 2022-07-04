<?php

require_once './config.php';
$path = 'profile/'.$_COOKIE['image'];
unlink($path);
$array = get_image($_COOKIE['username']);
for ($index = 0; $index < count($array); $index++) {
    $del = 'postimages/'.$array[$index];
    unlink($del);
}
delete_account($_COOKIE['username']);
delete_user($_COOKIE['username']);


unset($_COOKIE['username']);
unset($_COOKIE['password']);
unset($_COOKIE['firstname']);
unset($_COOKIE['lastname']);
unset($_COOKIE['favorite']);
unset($_COOKIE['email']);
unset($_COOKIE['image']);
setcookie('firstname', 0, time()-10);
setcookie('lastname',0,  time()-10);
setcookie('email', 0,  time()-10);
setcookie('username', 0,  time()-10);
setcookie('password', 0,  time()-10);
setcookie('favorite', 0,  time()-10);
setcookie('image', 0,  time()-10);
header("Location:welcome.php");
