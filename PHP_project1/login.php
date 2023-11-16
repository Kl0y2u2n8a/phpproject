<?php
    include_once 'header.php';
?>
<section>
    <div class="container">
        <h2>Login to your account</h2>
        <form action="includes/login.inc.php" method="$_POST">
            <input type="text" class="userinput" name="logusername" placeholder="Username..."><br />
            <input type="password" class="userinput" name="logpass" placeholder="Password..."><br /><br />
            <button type="submit" name="loginBut" class="btn btn-primary">Login</button>
            <p>If you do not have account yet, please sign up <a href="signup.php">here</a></p>
        </form>
    </div>
</section>

<?php
    include_once 'footer.php';
?>