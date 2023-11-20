<?php
    include_once 'header.php';
?>
<section>
    <div class="container">
        <h2>Login to your account</h2><br />
        <form action="includes/login.inc.php" method="post">
            <input type="text" class="userInput" name="logUsername" placeholder="Username/Email..."><br />
            <input type="password" class="userInput" name="logPass" placeholder="Password..."><br /><br />
            <button type="submit" name="loginBut" class="btn btn-primary">Login</button>
            <p>If you do not have account yet, please sign up <a href="signup.php">here</a></p>
        </form>
    </div>
    <?php
        if(isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput") {
                echo "<p style='color:red'>Fill in all fields.</p>";
            }
            else if($_GET["error"] == "loginfailed"){
                echo "<b style='color:#cc0000; background-color:#ffe6e6; display:inline'>Incorrect Username/Password !</b>";
            }
        }
    ?>
</section>

<?php
    include_once 'footer.php';
?>