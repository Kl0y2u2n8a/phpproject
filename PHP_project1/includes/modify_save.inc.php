<?php
    if(isset($_POST["modSaveBut"])){

        $userUsername = $_POST['modUsername'];
        $oldPw = $_POST['modOldPw'];
        $newPw = $_POST['modNewPw'];
        $renewPw = $_POST['modReNewPw'];

        require_once "dbh.inc.php";
        require_once "functions.inc.php";

        // if empty input return with error message
        if(emptyNewPw($oldPw, $newPW, $renewPw) !== false){
            header('location: ../modify.php?error=emptyinput/'.$userUsername.'/'.$oldPw.'/'.$newPw.'/'.$renewPw);
            exit();
        }
        
        updateUserPw($conn, $userUsername,$newPW);
    }
?>