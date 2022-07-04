<!doctype html>
<html lang="en">
  <head>
  	<title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signin.css">
	</head>
	<body class="img js-fullheight" style="background-image: url(images/login.jpg);">
	<section class="ftco-section">
		<div class="container">
	<div class="row justify-content-center" style="margin-top:-13vh;">
	<div class="col-md-6 col-lg-4">
	<div class="login-wrap p-0">
	<h2 class="mb-4 text-center" style="color:rgb(247, 143, 53); font-weight:bold; text-shadow: 2px 1px black; font-size:2vw">Create an account</h2>
            <form method="post" action="index.php" class="signin-form" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Firstname" id="firstname" name="firstname" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Lastname" id="lastname" name="lastname" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" id="username" name="username" required>
                    </div>
	        <div class="form-group">
	            <input id="password-field" type="password" class="form-control" placeholder="Password" id="password" name="password" required>
	            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	        </div>
                    <div class="form-group">
                      <input class="btn btn-outline-secondary dropdown-toggle" type="text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:rgb(247, 143, 53);" id="favorite" name="favorite" placeholder="Favorite City">
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
                        <input type="file" id="file" name="file" required>
                        <label for="file" style="margin-left:0.5vw; margin-top: -2vh;">Choose Photo</label>
                    </div>
	        <div class="form-group">
                        <button type="submit" class="button" style="margin-top: -2vh;" id="sub" name="sub">Sign up</button>
	        </div>
	</form>
              <div class="signup">Already have an account ? <a href="signin.php">Sign in</a></div>
		      </div>
			</div>
			</div>
		</div>
	</section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        function setCity(id){
            document.getElementById("favorite").value = document.getElementById(id).innerHTML;
      
        }
    </script>
	</body>
</html>

