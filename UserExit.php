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
            alert("Username Exits");
            backToSignUp();
        }
        function backToSignUp(){
            window.location.replace("signup.php");
        }
    </script>
</body>
</html>

