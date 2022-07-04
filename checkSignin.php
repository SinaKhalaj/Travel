<?php
require_once './config.php';
$username = $_POST['username'];
$password = $_POST['password'];
if(checkUser($username, $password)){
    setcookie('firstname', get_user($username)['firstname'], time()+3600);
    setcookie('lastname', get_user($username)['lastname'], time()+3600);
    setcookie('email', get_user($username)['email'], time()+3600);
    setcookie('username', get_user($username)['username'], time()+3600);
    setcookie('password', get_user($username)['password'], time()+3600);
    setcookie('favorite', get_user($username)['favorite'], time()+3600);
    setcookie('image', get_user($username)['image'], time()+3600);
    header("Location: home.php");
//    echo "<pre>";
////    print_r(get_user($username));
//    echo get_user($username)['firstname'];
//    echo "</pre>";
}
else{
    header("Location:wrongUsernamePassword.php");
}