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
            header('location: ../signup.php?error=stmtfailed');
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

    // create user account and add into database
    function createUser($conn, $name, $email, $username, $password){
        $sql= "INSERT INTO users (usersName, usersEmail, usersUsername, usersPassword) VALUES (?, ?, ?, ?);";

        // statement
        $stmt = mysqli_stmt_init($conn);
        // if any error let user go back to sign up page
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('location: ../signup.php?error=stmtfailed');
            exit();
        }

        $hashedPw = password_hash($password, PASSWORD_DEFAULT);
        // bind user inputs to statement
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPw);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        session_start();
        $_SESSION['name'] = $name;

        header('location: ../aftersignup.php');
        exit();
    }


    // login
    function emptyInputlogin($username, $password){
        if(empty($username) || empty($password)){
            return true;
        }
        return false;
    }

    function loginUser($conn, $username, $password){
        // if data is in database, will return all data. Else, return false
        $userExist = existUsername($conn, $username, $username);

        if ($userExist === false) {
            header("location: ../login.php?error=loginfailed");
            exit();
        }

        $hasedPw = $userExist['usersPassword'];
        $checkPw = password_verify($password, $hasedPw);

        if($checkPw === false){
            header("location: ../login.php?error=loginfailed");
            exit();
        }
        else if($checkPw === true){
            session_start();
            $_SESSION["userId"] = $userExist["usersID"];
            $_SESSION["userUsername"] = $userExist["usersUsername"];
            $_SESSION["userEmail"] = $userExist["usersEmail"];
            $_SESSION["userName"] = $userExist["usersName"];
            $_SESSION["userPw"] = $userExist["usersPassword"];

            header("location: ../index.php");
            exit();
        }
    }

    // modify user profile
    function emptyNewPw($oldPw, $newPw, $renewPw){
        if(empty($oldPw) || empty($newPw) || empty($renewPw)){
            return true;
        }
        return false;
    }

    function updateUserPw($conn, $username, $newPw){
        header("location: ../myprofile.php?error=update");
        exit();
    }
?>