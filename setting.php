<?php
if (file_exists("D:/XAMPP/htdocs/Project/Project1/".$_COOKIE['username'])){
rename($_COOKIE['username'],"D:/XAMPP/htdocs/Project/Project1/post/".$_COOKIE['username']);
}
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
  	<title>Setting</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Setting.css">
    <link rel="stylesheet" href="css/signin.css">
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
            <a href="#"><img src="images\Setting.png" alt="" width="40" height="40"></a>
        </li>
        </ul>
    	</nav>
    <div id="content">
        <div class="row justify-content-center" style="width:100%; height:100% ;display:flex;
        flex-direction: row;
        justify-content:center;
        align-items: center;">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
              <h2 class="mb-4 text-center" style="color:rgb(247, 143, 53); font-weight:bold; text-shadow: 2px 1px black; font-size:2vw">Edit Information</h2>
              <form method="post" action="editProfile.php" class="signin-form" enctype="multipart/form-data">
                  <div class="form-group">
                      <input type="text" class="inp" placeholder="Firstname" id="firstname" name="firstname" value="<?php echo $firstname ?>" required>
                  </div>
                <div class="form-group">
                    <input type="text" class="inp" placeholder="Lastname" id="lastname" name="lastname" value="<?php echo $lastname ?>" required>
                </div>
                <div class="form-group">
                    <input type="text" class="inp" placeholder="Email" id="email" name="email"  value="<?php echo $email ?>" required>
                </div>
                <div class="form-group">
                    <input type="text" class="inp" placeholder="Username" id="username" name="username" value="<?php echo $username ?>" required>
                </div>
            <div class="form-group">
              <input id="password-field" class="inp" type="password" placeholder="Password"  id="password" name="password" value="<?php echo $password ?>" required>
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
            <div class="form-group">
                 <input class="btn btn-outline-secondary dropdown-toggle" type="text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:rgb(247, 143, 53);" id="favorite" name="favorite" value="<?php echo $favorite ?>">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" onclick="setCity(this.id)" id="tehran">Tehran</a>
                            <a class="dropdown-item" onclick="setCity(this.id)" id="newyork">New York</a>
                            <a class="dropdown-item" onclick="setCity(this.id)" id="dubai">Dubai</a>
                            <a class="dropdown-item" onclick="setCity(this.id)" id="paris">Paris</a>
                            <a class="dropdown-item" onclick="setCity(this.id)" id="rome">Rome</a>
                            <a class="dropdown-item" onclick="setCity(this.id)" id="london">London</a>
                            <a class="dropdown-item" onclick="setCity(this.id)" id="berlin">Berlin</a>
                            <a class="dropdown-item" onclick="setCity(this.id)" id="istanbul">Istanbul</a>
                        </div>
              </div>
              <div class="form-group">
                  <input type="file" id="file" name="file" value="<?php echo $_COOKIE['image'] ?>">
                <label for="file" style="margin-left:0.5vw;">Choose Photo</label>
              </div>
            <div class="form-group">
                <button type="submit" class="button" style="margin-top: -2vh;" id="sub" name="sub">Submit</button>
            </div>
          </form>
          <div class="foot">
            <div class="item"><a href="logout.php"><img src="images\Logout.png" alt="" width="40" height="40"><span class="logout">Log Out</span></a></div>
            <div class="item"><a href="deleteaccount.php"><img src="images\Delete.png" alt="" width="40" height="40"><span class="delete">Delete Account</span></a></div>
          </div>
          </div>
        </div>
        </div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        function setCity(id){
            document.getElementById("favorite").value = document.getElementById(id).innerHTML;
            console.log(document.getElementById("favorite").value);
      
        }
    </script>
</body>
</html>