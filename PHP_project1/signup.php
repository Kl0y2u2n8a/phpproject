<?php
    include_once 'header.php';
?>

<section>
    <div class="container">
        <h2>Sign up for your account</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" required class="userInput" name="fullName" placeholder="Full name..."><br />
            <input type="email" required class="userInput" name="email" placeholder="Email..." ><br />
            <input type="text" required class="userInput" name="username" placeholder="Username..."><br />
            <input type="password" required class="userInput" name="password" placeholder="Password..."><br />
            <input type="password" required class="userInput" name="rePassword" placeholder="Repeat Password..."><br /><br />
            <button type="submit" name="signBut" class="btn btn-primary">Sign up</button>
        </form>
        <p>If you already have account, please login <a href="login.php">here</a></p>
    </div> 
    <?php
        if(isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput") {
                echo "<b style='color:#cc0000; background-color:#ffe6e6; display:inline'>Fill in all fields.</b>";
            }
            else if($_GET["error"] == "invalidusername"){
                echo "<b style='color:#cc0000; background-color:#ffe6e6; display:inline'>Please enter a proper username!</b>";
            }
            else if($_GET["error"] == "invalidemail"){
                echo "<b style='color:#cc0000; background-color:#ffe6e6; display:inline'>Please enter a proper email!</b>";
            }
            else if($_GET["error"] == "unmatchpassword"){
                echo "<b style='color:#cc0000; background-color:#ffe6e6; display:inline'>Passwords are not match!</b>";
            }
            else if($_GET["error"] == "usernamealreadyexisted"){
                echo "<b style='color:#cc0000; background-color:#ffe6e6; display:inline'>Username is already in used!</b>";
            }
            else if($_GET["error"] == "stmtfailed"){
                echo "<b style='color:#cc0000; background-color:#ffe6e6; display:inline''>Something went wrong, please try again!</b>";
            }
        }
    ?>
</section>


<?php
    
    include_once 'footer.php';
?>