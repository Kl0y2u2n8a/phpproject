<?php
    if(isset($_POST['signBut'])){
        $name = $_POST['fullName'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $rePassword = $_POST['rePassword'];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';
        
        if(emptyInput($name, $email, $username, $password, $rePassword) !== false){
            header('location: ../signup.php?error=emptyinput');
            exit();
        } 

        if(invalidUsername($username) !== false){
            header('location: ../signup.php?error=invalidemail');
            exit();
        }

        if(invalidEmail($email) !== false){
            header('location: ../signup.php?error=invalidemail');
            exit();
        }

        if(matchPass($password, $rePassword) !== false){
            header('location: ../signup.php?error=unmatchpassword');
            exit();
        }

        if(existUsername($conn, $username, $email) !== false){
            header('location: ../signup.php?error=usernamealreadyexisted');
            exit();
        }

        // if no error then create user account
        createUser($conn, $name, $email, $username, $password);

    }
    else{
        header('location: ../signup.php');
    }
?>