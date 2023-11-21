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
        <button style='margin:5px;' name="modSaveBut" type="submit">Save</button>
    </form>
    
    <form action="myprofile.php" method="post">
        <button style='margin:5px;' name="modCancelBut" type="submit">Cancel</button>
    </form>

    <?php
    }


    if(isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput") {
            echo "<p style='color:red'>Please enter your new password and re-enter it!</p>";
        }
    }
    ?>
    
</section>

<?php
    include_once 'footer.php'; 
?>