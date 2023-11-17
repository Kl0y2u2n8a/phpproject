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
</section>


<?php
    include_once 'footer.php';
?>