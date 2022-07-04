<?php

$firstname = $_COOKIE['firstname'];
$lastname = $_COOKIE['lastname'];
$email = $_COOKIE['email'];
$username = $_COOKIE['username'];
$password = $_COOKIE['password'];
$favorite = $_COOKIE['favorite'];
$image = "profile/".$_COOKIE['image'];

?>
<!doctype html>
<html lang="en">
<head>
  	<title>Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Search.css">
</head>
<body>
	<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar" class="active">
                            <h1 style="margin-top:2vh;"><a href="profile.php"><img src="<?php echo $image ?>" alt="" class="rounded-circle me-2" width="90" height="90"></a></h1>
        <ul class="list-unstyled components mb-5">
        <li class="active">
            <a href="home.php"><img src="images\Home.png" alt="" width="30" height="30" class="icon"></a>
        </li>
        <li>
            <a href="#"><img src="images\Search.png" alt="" width="40" height="40"></a>
        </li>
        <li>
            <a href="setting.php"><img src="images\Setting.png" alt="" width="30" height="30" class="icon"></a>
        </li>
        </ul>
    	</nav>
    <div id="content">
        <div class="searchbar">
            <form method="post" action="find.php">
                <input type="search" placeholder="Search" name="search" id="search" name="search" required>
                <input type="submit" placeholder="Search" name="submit" id="submit" name="submit">
            </form>
        </div>
        <div class="result" style="font-size: 4vw; color: white">
            
        </div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
       
    </script>
</body>
</html>