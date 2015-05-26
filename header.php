<?php

$connect = mysql_connect("localhost","root","sa131521mi");

if($connect) {

    $dbname = "computer_shop";
    mysql_select_db($dbname,$connect) or die("Could not find the database on server");

    session_start();
    $getList = "SELECT TypeName FROM producttype ";
    $result = mysql_query($getList);
}

?>

<head>
    <link rel="stylesheet" href="custom.css">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
</head>



<div id='cssmenu'>
    <ul>
        <li><a href='index.php'><span>Home</span></a></li>
        <li class='active has-sub'><a href='#'><span>Products</span></a>
            <ul>

                        <?php while ($row = mysql_fetch_array($result)) {
                            echo "<li><a href=".$row['TypeName'].".php>" . $row['TypeName'] . "</a></li>";
                        } ?>

            </ul>
        </li>
        <li><a href='about.php'><span>About</span></a></li>
        <li class='last'><a href='contact.php'><span>Contact</span></a></li>
    </ul>
</div>