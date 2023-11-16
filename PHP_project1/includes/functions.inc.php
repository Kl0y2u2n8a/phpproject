<?php

    function emptyInput($name, $email, $username, $password, $rePassword){
        if(empty($name) || empty($email) || empty($username) || empty($password) ||empty($rePassword)){
            return true;
        }
        return false;
        
    }

    function invalidUsername($username){
        if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            return true;
        }
        return false;
    }

    function invalidEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }

    function matchPass($password, $rePassword){
        if($password !== $rePassword){
            return true;
        }
        return false;
    }

    function existUsername($conn, $username, $email){
        // check if username or email is already exist in database
        $sql= "SELECT * FROM users WHERE usersUsername = ? OR usersEmail = ?;";
        // statement
        $stmt = mysqli_stmt_init($conn);
        // if any error let user go back to sign up page
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('location: ../signup.php?error=stmtfailed1');
            exit();
        }
        // bind user inputs to statement
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        // if user data is in the database, grab all data and return
        if ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }

        return false;
        
        mysqli_stmt_close($stmt);
    }

    function createUser($conn, $name, $email, $username, $password){
        $sql= "INSERT INTO users (usersName, usersEmail, usersUsername, usersPassword) VALUES (?, ?, ?, ?);";
        // statement
        $stmt = mysqli_stmt_init($conn);
        // if any error let user go back to sign up page
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('location: ../signup.php?error=stmtfailed2');
            exit();
        }

        $hashedPw = password_hash($password, PASSWORD_DEFAULT);
        // bind user inputs to statement
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPw);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header('location: ../signup.php?error=none');
        exit();
    }
?>