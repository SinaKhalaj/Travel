<?php
require_once './config.php';
?>
<!doctype html>
<html lang="en">
<head>
  	<title>First Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/firstpage.css">
</head>
<body>
	<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar" class="active">
        <ul class="list-unstyled components mb-5">
        <li class="active">
            <a href="signin.php" style="font-size: 1.3vw; font-weight: bold; text-shadow:2px 1px black;">Sign in</a>
        </li>
        <li>
            <a href="signup.php" style="font-size: 1.3vw; font-weight: bold; text-shadow:2px 1px black;">Sign Up</a>
        </li>
        </ul>
    	</nav>
    <div id="content">
        <div class="up">
            <div class="enjoy">Life + <span class="world"> Travel</span></div>
        </div>
        <div class="down" id="down">
            <?php 
                $post = array();
                global $postDB;
                $results = $postDB->query("
                    SELECT *
                    FROM posts
                "); 
                while($row = $results->fetchArray(SQLITE3_ASSOC)) {
                    array_push($post , get_post($row['username'],$row['location']));
                }
                shuffle($post);
                for($index = 0 ; $index < count($post) ; $index++){
                    $post_username = $post[$index]['username'];               
                    $post_profile = "profile/".get_user($post_username)['image'];
                    $post_location = $post[$index]['location'];
                    $post_picture1 = "postimages/".$post[$index]['picture1'];
                    $post_picture2 = "postimages/".$post[$index]['picture2'];
                    $post_picture3 = "postimages/".$post[$index]['picture3'];
                    $post_cost = $post[$index]['cost'];
                    $post_history = $post[$index]['history'];
                    $post_recommended = $post[$index]['recommended'];
                    $post_information = $post[$index]['information'];
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
</body>
</html>