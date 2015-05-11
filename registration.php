<html>
<head>
    <link rel="stylesheet" href="custom.css">
    <title>Computer-Shop</title>
</head>
<?php require 'header.php'; ?>






<div id="main">
<form name = "registration" action="registration.php" method="POST" >

    <table border="1">

        <tr>

            <td>Username:</td>
            <td><input type="text" name="Username" value="" size="20" /></td>

        </tr>

        <tr>

            <td>Password: </td>
            <td><input type="password" name="Password" value="" size="20" /></td>


        </tr>

        <tr>

            <td>e-mail:  </td>
            <td><input type="text" name="email" value="" size="20" /></td>


        </tr>


        <tr>


            <td>First Name: </td>
            <td><input type="text" name="firstname" value="" size="20" /></td>


        </tr>

        <tr>


            <td>Last Name: </td>
            <td><input type="text" name="LastName" value="" size="20" /></td>


        </tr>


        <tr>

            <td>Phone Number:</td>
            <td><input type="text" name="phonenumber" value="" size="20" /></td>


        </tr>


        <tr>

            <td>Address:</td>
            <td><input type="text" name="Address" value="" size="20" /></td>


        </tr>




    </table>


    <input type="submit" value="Submit" name="Submit" />

</form>
</div>
<?php
if (isset($_POST['Submit'])){


    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $email = $_POST['email'];
    $fname = $_POST['firstname'];
    $lname = $_POST['LastName'];
    $phone = $_POST['phonenumber'];
    $address = $_POST['Address'];

    $hash = password_hash($password,PASSWORD_BCRYPT);

    $sqlinsert = "INSERT INTO customer (CUS_ID,F_NAME,L_NAME,PHONE_NUM,E_MAIL,ADDRESS,USERNAME,PASSWORD) VALUES ('3','$fname','$lname','$phone','$email','$address','$username','$hash');";

    echo $sqlinsert;


    if(!mysql_query($sqlinsert)){
        echo "something wrong";
        echo mysql_error();
    }

    else{

        echo "a new recored is added";

    }

}
?>



</html>