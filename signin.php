<!doctype html>
<html lang="en">
  <head>
  	<title>Sign In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signin.css">
	</head>
	<body class="img js-fullheight" style="background-image: url(images/login.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center" style="margin-top:15vh;">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h2 class="mb-4 text-center" style="color:rgb(247, 143, 53); font-weight:bold; text-shadow: 2px 1px black; font-size:2vw">Have an account?</h2>
                                    <form method="post" action="checkSignin.php" class="signin-form">
		      		<div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Username" id="username" name="username" required>
		      		</div>
	            <div class="form-group">
                            <input id="password-field" type="password" class="form-control" placeholder="Password" id="password" name="password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="button">Sign In</button>
	            </div>
	          </form>
              <div class="signup">Don't have an account ? <a href="signup.php">Sign up</a></div>
		      </div>
			</div>
			</div>
		</div>
	</section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
	</body>
</html>

