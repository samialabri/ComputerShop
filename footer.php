<?php






?>


<div id = "footer">

    <a href="index.php">Home</a>
    <a href="login.php">Login</a>
    <a href="registration.php">Register</a>
    <a href="logout.php">logout</a>

    <?php
    if($_SESSION['type']==1 | $_SESSION['type']==2){

   echo "<a href='product_insertion.php'>Add new item </a>";
        echo "<a href='add_employee.php'>Add new employee </a>";

    }
    ?>
</div>