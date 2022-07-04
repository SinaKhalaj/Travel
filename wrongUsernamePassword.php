<!doctype html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body onload="showError()">
    <script>
        function showError(){
            alert("Username or Password is Wrong");
            backToSignIn();
        }
        function backToSignIn(){
            window.location.replace("signin.php");
        }
    </script>
</body>
</html>

