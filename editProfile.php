<?php

require_once './config.php';
$target_dir = "D:/XAMPP/htdocs/Project/Project1/profile/";
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
move_uploaded_file($file_tmp, $target_dir . $file_name);
$loc = 'profile/' . $file_name;

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$favorite = $_POST['favorite'];
$image = $file_name;
if($image == false){
   $image = $_COOKIE['image']; 
}
delete_user($_COOKIE['username']);
add_users($firstname, $lastname, $email, $username, $password, $favorite, $image);
setcookie('firstname', get_user($username)['firstname'], time()+3600);
setcookie('lastname', get_user($username)['lastname'], time()+3600);
setcookie('email', get_user($username)['email'], time()+3600);
setcookie('username', get_user($username)['username'], time()+3600);
setcookie('password', get_user($username)['password'], time()+3600);
setcookie('favorite', get_user($username)['favorite'], time()+3600);
setcookie('image', get_user($username)['image'], time()+3600);
rename("D:/XAMPP/htdocs/Project/Project1/post/".$_COOKIE['username'],"D:/XAMPP/htdocs/Project/Project1/post/".$username);
header("Location: setting.php");