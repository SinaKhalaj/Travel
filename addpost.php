<?php
require_once './lib/posts.php';
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
  	<title>Add Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Addpost.css">
</head>
<body onload="setVar()">
<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" class="active">
		<h1 style="margin-top:2vh;"><a href="profile.php"><img src="<?php echo $image ?>" alt="" class="rounded-circle me-2" width="90" height="90"></a></h1>
        <ul class="list-unstyled components mb-5">
        <li class="active">
            <a href="home.php"><img src="images\Home.png" alt="" width="30" height="30" class="icon"></a>
        </li>
        <li>
            <a href="search.php"><img src="images\Search.png" alt="" width="30" height="30" class="icon"></a>
        </li>
        <li>
            <a href="setting.php"><img src="images\Setting.png" alt="" width="30" height="30" class="icon"></a>
        </li>
        </ul>
    </nav>
    <div id="content">
        <div class="box">
            <div class="post">
                <div class="head">
                    <img src="<?php echo $image ?>" alt="" id="postimg" class="rounded-circle me-2" width="80" height="80">
                    <?php echo $username ?>
                </div>
                <form class="form" method="post" action="showPost.php" enctype="multipart/form-data">
                <div class="pics">
                    <div class="getfile">Image<input type="file" name="photo[]" id="photo" multiple style="width:100% ; height: 100%;opacity:0;cursor:pointer; display:flex;flex-direction: row;justify-content:center;align-items: center;" required></div>
                </div>
                <div class="uploadedPics" id="uploadedPics">
                </div>
                <div class="location">
                    <input type="text" class="input" name="location" id="location" placeholder="Location" required>
                </div>
                <div class="cost">
                    <input class="input" type="text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:gray; width:90%; height:100%; background:none;" id="cost" name="cost" placeholder="Cost" required>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" id="Less than 100,000T" onclick="setClick(this.id)">Less than 100,000T</a>
                    <a class="dropdown-item" id="Around 100,000T" onclick="setClick(this.id)" >Around 100,000T</a>
                    <a class="dropdown-item" id="Around 500,000T" onclick="setClick(this.id)">Around 500,000T</a>
                    <a class="dropdown-item" id="Around 1,000,000T" onclick="setClick(this.id)">Around 1,000,000T</a>
                    <a class="dropdown-item" id="Around 5,000,000T" onclick="setClick(this.id)">Around 5,000,000T</a>
                    <a class="dropdown-item" id="Around 10,000,000T" onclick="setClick(this.id)">Around 10,000,000T</a>
                    <a class="dropdown-item" id="More than 10,000,000T" onclick="setClick(this.id)">More than 10,000,000T</a>
                  </div>
                </div>
                <div class="history">
                    <input type="text" class="input" name="history" id="history" placeholder="History">
                </div>
                <div class="recommended">
                    <input type="text" class="input" name="recommended" id="recommended" placeholder="Recommended Places">
                </div>
                <div class="information">
                    <input type="text" class="input" name="information" id="information" placeholder="Any Useful Information">
                </div>
                <div class="submit">
                    <input type="submit" class="input" name="submit" id="submit">
                </div>
                </form>
            </div>
        </div>
</div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        function setClick(id){
            document.getElementById("cost").value = document.getElementById(id).innerHTML;
            console.log(document.getElementById("cost").value);
        }
    </script>
</body>
</html>