<?php

$connect = mysql_connect("localhost","root","sa131521mi");

if($connect) {

    $dbname = "computer_shop";
    mysql_select_db($dbname,$connect) or die("Could not find the database on server");

}

?>