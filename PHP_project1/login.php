<?php
    include_once 'header.php';
?>
<section>
    <div class="container">
        <h2>Login to your account</h2>
        <form action="includes/login.inc.php" method="$_POST">
            <input type="text" class="userInput" name="logUsername" placeholder="Username..."><br />
            <input type="password" class="userInput" name="logPass" placeholder="Password..."><br /><br />
            <button type="submit" class="btn btn-primary">Login</button>
            <p>If you do not have account yet, please sign up <a href="signup.php">here</a></p>
        </form>
    </div>
</section>

<?php
    include_once 'footer.php';
?>