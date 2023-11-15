<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- For using Bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Link to my css file -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Sign up</title>
</head>

<body>

    <div>
        <ul class="mynavbar">
            <li class="nav"><a href="index.php"><img src="img/logo.png" alt="logo" width="50" height="50"></a></li>
            <li class="nav"> <a href="index.php" class="bartext">Home</a></li>
            <li class="nav"><a href="signup.php" class="bartext">Sign up</a></li>
            <li class="nav"><a href="login.php" class="bartext">Log in</a></li>
        </ul>    
    </div>

    
    <div class="container">
        <ul  class="loginset">
            <h1>Sign up for your acoount</h1><br>
            <li><textarea id="fullname" rows="1" cols="20" placeholder="Full Name..."></textarea></li><br>
            <li><textarea id="email" rows="1" cols="20"placeholder="Email..."></textarea></li><br>
            <li><textarea id="signusername" rows="1" cols="20"placeholder="Username..."></textarea></li><br>
            <li><textarea id="signpassword" rows="1" cols="20"placeholder="Password..."></textarea></li><br>
            <li><textarea id="reppassword" rows="1" cols="20" placeholder="Repeat Password..."></textarea></li><br>
            <li><button class="btn btn-primary btn-lg">Sign Up</button></li>
        </ul>
    </div>


    <!-- For using Bootstrap in jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>