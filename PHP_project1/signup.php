<?php
    include_once 'header.php';
?>

<section>
    <div class="container">
        <h2>Sign up for your account</h2>
        <form action="includes/signup.inc.php" method="$_POST">
            <input type="text" class="userInput" name="fullName" placeholder="Full name..."><br />
            <input type="email" class="userInput" name="email" placeholder="Email..." ><br />
            <input type="text" class="userInput" name="username" placeholder="Username..."><br />
            <input type="password" class="userInput" name="password" placeholder="Password..."><br />
            <input type="password" class="userInput" name="rePassword" placeholder="Repeat Password..."><br /><br />
            <button type="submit" name="signupBut" class="btn btn-primary">Sign up</button>
            <p>If you already have account, please log in <a href="login.php">here</a></p>
        </form>
    </div>
</section>


<?php
    include_once 'footer.php';
?>