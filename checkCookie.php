<?php

if (isset($_COOKIE['username'])){
    header("Location: home.php");
}
else{
    header("Location: firstpage.php");
}
