<?php

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

