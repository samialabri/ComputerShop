<html>
<head>
    <link rel="stylesheet" href="custom.css">
    <title>Computer-Shop</title>
</head>
<?php

require("header.php");


?>
<div id="main">
<form name="login" action="login.php" method="POST">



        <table border="1">

            <tr>

                <td>Username:</td>
                <td><input type="text" name="Username" value="" size="20" /></td>

            </tr>

            <tr>

                <td>Password: </td>
                <td><input type="password" name="Password" value="" size="20" /></td>


            </tr>



    </table>


    <input type="Submit" value="login" name="login" />





</form>
</div>
<?php


if (isset($_POST['login'])) {


    $username = $_POST['Username'];
    $password = $_POST['Password'];




    $sqlcheck = "SELECT USER_ID,user_name, password ,fName, lName,userType FROM user WHERE user_name = '$username';";




    $result = mysql_query($sqlcheck);
    $row = mysql_fetch_row($result);


    if(!isset($row)){

        echo "you are not registered";

    }

    else {

        if(password_verify( $password,$row[2])){


            echo "<br>Welcome $row[3] to the website...";
            $_SESSION['login']=$row[0];
            $_SESSION['type']=$row[5];


        }else

            header("location: index.php");





    }



}

require "footer.php";
?>