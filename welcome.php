<!doctype html>
<html lang="en">
<head>
  	<title>Traveling Website</title>
    <link rel="stylesheet" href="css/Welcome.css">
</head>
<body onload="loadwelcome()" id="body">
            <script>
                function loadwelcome(){
                    document.getElementById("body").innerHTML = "<div id=\"welocme\">Welcome to our Traveling Website</div>";
                    timeout = setTimeout(gonext, 3000);
                }
                function gonext(){
                    window.location.replace("checkCookie.php");
                }
            </script>
</body>
</html>