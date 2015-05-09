<?php

require("header.php");


?>





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



<?php


if (isset($_POST['login'])) {


    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $hash = password_hash($password,PASSWORD_BCRYPT);

    echo $hash;

    $sqlcheck = "SELECT F_NAME, L_NAME, USERNAME ,PASSWORD FROM customer WHERE USERNAME = '$username';";



    $result = mysql_query($sqlcheck);
    $row = mysql_fetch_row($result);

    if(!isset($raw)){

        echo "you are not registered";

    }

    else {

        if(password_verify( $password,$row[3])){


            echo "<br>Welcome [$raw[0]]] to the website...";



        }else

            header("location: index.php");





    }



}



?>