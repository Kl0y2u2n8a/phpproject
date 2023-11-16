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

<?php
    include_once 'header.php';
?>

    
    <div class="container">
        <ul  class="loginset">
            <h1>Sign up for your acoount</h1><br>
            <li><textarea id="fullname" rows="1" cols="20" required placeholder="Full Name..."></textarea></li><br>
            <li><textarea id="email" rows="1" cols="20" required placeholder="Email..."></textarea></li><br>
            <li><textarea id="signusername" rows="1" cols="20" required placeholder="Username..."></textarea></li><br>
            <li><textarea id="signpassword" rows="1" cols="20" required placeholder="Password..."></textarea></li><br>
            <li><textarea id="reppassword" rows="1" cols="20" required placeholder="Repeat Password..."></textarea></li><br>
            <li><button class="btn btn-primary btn-lg">Sign Up</button></li>
            <li><p>If you already have an account, please login <a href="login.php">here</a></p></li>
        </ul>
    </div>

<?php
    include_once 'footer.php';
?>