<?php
    include_once 'header.php';
?>


<section>
    <?php 
    if(isset($_SESSION["userName"])){
        echo "<h1>". $_SESSION['userName']."'s profile</h1><br>";
        echo "<table class='profile-table'>";
        echo "<tr>";
        echo "<th> Name </th>";
        echo "<td>".$_SESSION['userName']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th> Email </th>";
        echo "<td>".$_SESSION['userEmail']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th> Username </th>";
        echo "<td>".$_SESSION['userUsername']."</td>";
        echo "</tr>";
        echo "<th> Password </th>";
        echo "<td>*****</td>";
        echo "</tr>";
        echo "</table><br>";
    ?>
    <form action="modify.php" method="post">
        <button name='editBut' type='submit'>Edit</button>
    </form>

    <?php
    }

    if(isset($_GET["error"])){
        if($_GET["error"] == "update"){
            echo "<br>";
            echo "<p style='color:green'>You have successfully update your password!</p>";
        }
    }
    ?>
</section>

<?php
    include_once 'footer.php'; 
?>