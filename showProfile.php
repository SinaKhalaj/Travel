<?php
require_once './config.php';
$firstname = $_COOKIE['firstname'];
$lastname = $_COOKIE['lastname'];
$email = $_COOKIE['email'];
$username = $_COOKIE['username'];
$password = $_COOKIE['password'];
$favorite = $_COOKIE['favorite'];
$image = "profile/".$_COOKIE['image'];
$search = $_COOKIE['search'];
setcookie('search', $search , time()+50);
$profimage = "profile/".get_user($search)['image'];
$profusername = get_user($search)['username'];
$profifavorite = get_user($search)['favorite'];
?>
<!doctype html>
<html lang="en">
<head>
  	<title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile.css">
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
            <a href="search.php"><img src="images\Search.png" alt="" width="30" height="30" class="icon"></a>
        </li>
        <li>
            <a href="setting.php"><img src="images\Setting.png" alt="" width="30" height="30" class="icon"></a>
        </li>
        </ul>
    	</nav>
    <div id="content">
        <div class="up">
            <div class="profileimage"><img src="<?php echo $profimage ?>" alt="" class="rounded-circle me-2" width="130" height="130"></div>
            <div class="profileusername"><?php echo $profusername ?></div>
            <div class="profilefavorite">Favorite City: <?php echo $profifavorite ?></div>
        </div>
        <div class="down" id="down">
            <?php 
                global $postDB;
                $results = $postDB->query("
                    SELECT *
                    FROM posts
                "); 
                while($row = $results->fetchArray(SQLITE3_ASSOC)) {
                    $post = get_post($row['username'],$row['location']);
                    $post_username = $post['username'];
                    if($post_username != $_COOKIE['search']){
                        continue;
                    }
                    $post_profile = "profile/".get_user($post_username)['image'];
                    $post_location = $post['location'];
                    $post_picture1 = "postimages/".$post['picture1'];
                    $post_picture2 = "postimages/".$post['picture2'];
                    $post_picture3 = "postimages/".$post['picture3'];
                    $post_cost = $post['cost'];
                    $post_history = $post['history'];
                    $post_recommended = $post['recommended'];
                    $post_information = $post['information'];
                    ?>
                    <div class="post">
                    <div class="head">
                        <img src="<?php echo $post_profile ?>" alt="" class="rounded-circle me-2" width="80" height="80" style="margin-left: 0.3vw;"><span style="margin-left:0.5vw;"><?php echo $post_username ?></span>
                    </div>
                    <div class="pics">
                        <div class="Sidepic" style="margin-right:0.3vw;"><img src="<?php echo $post_picture2 ?>" alt="" width="100%" height="100%"></div>
                        <div class="Mainpic"><img src="<?php echo $post_picture1 ?>" alt="" width="100%" height="100%"></div>
                        <div class="Sidepic"style="margin-left:0.3vw;"><img src="<?php echo $post_picture3 ?>" alt="" width="100%" height="100%"></div>
                    </div>
                    <div class="loc">
                        <img src="images\loc.png" width="40" height="40"><span class="titr">Location:</span> <span class="matn"><?php echo $post_location ?></span> 
                    </div>
                    <div class="co">
                        <img src="images\co.png" width="34" height="34" style="margin-left:0.3vw;"><span class="titr"> Cost:</span> <span class="matn"><?php echo $post_cost ?></span> 
                    </div>
                    <div class="his">
                        <img src="images\his.png" width="40" height="40" style="margin-left:0.3vw;"><span class="titr">History:</span> <span class="matn"><?php echo $post_history ?></span> 
                    </div>
                    <div class="rec">
                        <img src="images\rec.png" width="40" height="40" style="margin-left:0.3vw;"><span class="titr"> Recommended:</span> <span class="matn"><?php echo $post_recommended ?></span> 
                    </div>
                    <div class="inf">
                        <img src="images\inf.png" width="40" height="40" style="margin-left:0.3vw;"><span class="titr">Other Info:</span> <span class="matn"><?php echo $post_information ?></span> 
                    </div>
                </div>
            <?php
                }
                ?>
        </div>
	</div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        function addpost(){
            window.location.replace("addpost.php");
        }
        
    </script>
</body>
</html>