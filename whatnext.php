<?php

if(isset($_COOKIE['search'])){
    header("Location: showProfile.php");
}
else{
    header("Location: search.php");
}