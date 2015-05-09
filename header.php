


<?php

$connect = mysql_connect("localhost","root","sa131521mi");

if($connect) {

    echo "Connected to database server<br>";
    $dbname = "computer_shop";
    mysql_select_db($dbname,$connect) or die("Could not find the database on server");

    echo "database selected<br>";


}

?>