<?php
    // user will be login in every pages
    session_start();
?>

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

    <title>PHP project login system</title>

    <!-- logo reference: https://www.flaticon.com/free-icon/login_5087579 -->

</head>

<body>
    <div>
        <ul class="myNavbar"> 
            <li class="nav"><a href="index.php"><img src="img/logo.png" alt="logo" width="50" height="50"></a></li>
            <li class="nav"> <a href="index.php" class="barText">&#127968; Home</a></li>
            <?php 
            // if login then show profile and log out
                if (isset($_SESSION["userId"])) {
                    echo '<li class="nav"><a href="myprofile.php" class="barText">&#128100; '. $_SESSION["userName"].'\'s Profile</a></li>';
                    echo '<li class="nav" style="float:right"><a href="includes/logout.inc.php" class="barText">Log Out</a></li>';
                }
                else{
                    echo '<li class="nav" style="float:right"><a href="login.php" class="barText">Log in</a></li>';
                    echo '<li class="nav" style="float:right"><a href="signup.php" class="barText">Sign up</a></li>';
                }
            ?>
        </ul>    
    </div>
    <div class="container">