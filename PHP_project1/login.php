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

    <title>Login</title>

    
</head>

<?php
    include_once 'header.php';
?>


    
    <div class="container">
        <ul  class="loginset">
            <h1>Please login here</h1><br>
            <li><textarea id="logusername" rows="1" cols="20" required placeholder="Username..."></textarea></li><br>
            <li><textarea id="logpass" rows="1" cols="20" required placeholder="Password..."></textarea></li><br>
            <li><button class="btn btn-primary btn-lg">Login</button></li>
            <li><p>If you do not have account, please sign up <a href="signup.php">here</a></p></li>
        </ul>
    </div>

<?php
    include_once 'footer.php';
?>