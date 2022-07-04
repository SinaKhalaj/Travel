<?php
require_once './lib/posts.php';

$firstname = $_COOKIE['firstname'];
$lastname = $_COOKIE['lastname'];
$email = $_COOKIE['email'];
$username = $_COOKIE['username'];
$password = $_COOKIE['password'];
$favorite = $_COOKIE['favorite'];
$image = "profile/".$_COOKIE['image'];

$total = count($_FILES['photo']['name']);

$target_dir = "D:/XAMPP/htdocs/Project/Project1/postimages/";
for( $i=0 ; $i < $total ; $i++ ) {

  //Get the temp file path
  $file_name = $_FILES['photo']['name'][$i];
  $file_tmp = $_FILES['photo']['tmp_name'][$i];
  move_uploaded_file($file_tmp, $target_dir . $file_name);
  if($i==0){
      $picture1 = $file_name;
  }
  if($i==1){
      $picture2 = $file_name;
  }
 if($i==2) {
      $picture3 = $file_name;
      break;
  }
}
if(!isset($picture2)){
    $picture2 = 'default.jpg';
}
if(!isset($picture3)){
    $picture3 = 'default.jpg';
}
$location = $_POST['location'];
$cost = $_POST['cost'];
$history = $_POST['history'];
$recommended = $_POST['recommended'];
$information = $_POST['information'];

add_post($username , $location, $picture1 , $picture2 , $picture3 , $cost, $history, $recommended, $information);

?>
<!doctype html>
<html lang="en">
<head>
  	<title>Add Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/addpost.css">
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
                <form class="form" method="post" enctype="multipart/form-data">
                <div class="pics">
                    <div class="getfile">Image<input type="file" name="photo[]" multiple id="photo" onchange="setPic()" style="width:100% ; height: 100%;opacity:0;cursor:pointer; display:flex;flex-direction: row;justify-content:center;align-items: center;" disabled></div>
                </div>
                <div class="uploadedPics" id="uploadedPics">
                    <div class="inside">
                    <img src="<?php echo 'postimages/' . $picture1; ?>" class="gg"  width="80" height="80">
                    <img src="<?php echo 'postimages/' . $picture2; ?>" class="gg"" width="80" height="80">
                    <img src="<?php echo 'postimages/' . $picture3; ?>" class="gg" width="80" height="80">
                    </div>
                </div>
                <div class="location">
                    <input type="text" class="input" name="location" id="location" placeholder="Location" value="<?php echo $location ?>" readonlyzz>
                </div>
                <div class="cost">
                    <input class="input" type="text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:gray; width:90%; height:100%; background:none;" id="cost" name="cost" placeholder="Cost" value="<?php echo $cost ?>" required>
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
                    <input type="text" class="input" name="history" id="history" placeholder="History" value="<?php echo $history ?>">
                </div>
                <div class="recommended">
                    <input type="text" class="input" name="recommended" id="recommended" placeholder="Recommended Places" value="<?php echo $recommended ?>">
                </div>
                <div class="information">
                    <input type="text" class="input" name="information" id="information" placeholder="Any Useful Information" value="<?php echo $information ?>">
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