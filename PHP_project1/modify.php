<?php
    include_once 'header.php';
?>


<section>
    <?php 
    if(isset($_SESSION["userName"])){
    ?> 
    
    <h1><?php echo $_SESSION['userName']; ?>'s profile</h1><br>
    

    <form action="includes/modify_save.inc.php" method="post">
        <table class='profile-table'>
            <tr>
                <th> Name </th>
                <td><?php echo $_SESSION['userName']; ?> </td>
            </tr>
            <tr>
                <th> Email </th>
                <td><?php echo $_SESSION['userEmail']; ?></td>
            </tr>
            <tr>
                <th> Username </th>
                <td name="modUsername"><?php echo $_SESSION['userUsername'] ?></td>
            </tr>
            <tr>
                <th> Old Password </th>
                <td><input type="password" class="userInput" placeholder='*****' name="modOldPw"></input></td>
            </tr>
            <tr>
                <th> New Password </th>
                <td><input type="password" class="userInput" placeholder='*****' name="modNewPw"></input></td>
            </tr>
            <tr>
                <th> Re-enter New Password </th>
                <td><input type="password" class="userInput" placeholder='*****' name="modReNewPw"></input></td>
            </tr>
        </table><br>
        <div>
            <button class="btn btn-secondary" name="modSaveBut" type="submit">Save</button>
            <button class="btn btn-secondary"  name="modCancelBut" type="submit">Cancel</button>
        </div>
    </form>
    <?php
    }


    if(isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput") {
            echo "<p style='color:red'>Please enter your new password and re-enter it!</p>";
        }
        else if($_GET["error"] == "loginfailed") {
            echo "<p style='color:red'>User is not exist!</p>";
        }
        else if($_GET["error"] == "userPwUnmatch") {
            echo "<p style='color:red'>Your current password is incorrect!</p>";
        }
        else if($_GET["error"] == "newPwUnmatch") {
            echo "<p style='color:red'>Please enter new password correctly two times!</p>";
        }
        else if($_GET["error"] == "notupdate") {
            echo "<p style='color:red'>For some reason, could not update your password, please try again!</p>";
        }
    }
    ?>
    
</section>

<?php
    include_once 'footer.php'; 
?>