<?php
    if (isset($_POST["signupBut"])) {
        # code...
        header("location: ../index.php");
    }
    else{
        $test_alert = "<script type='text/javascript'>alert('Fail');</script>";
        echo $test_alert;
        header("location: ../signup.php");
    }
?>