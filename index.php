<link rel="stylesheet" href="main.css">
<?php

require("header.php");


$result0 = mysql_query("SELECT * FROM cpu;");
$result1 = mysql_query("SELECT * FROM cooling_system;");
$result2 = mysql_query("SELECT * FROM graphics_card;");
$result3 = mysql_query("SELECT * FROM mother_board;");
$result4 = mysql_query("SELECT * FROM ram;");
$result5 = mysql_query("SELECT * FROM storage;");



$num0 = mysql_num_rows($result0);
$num1 = mysql_num_rows($result1);
$num2 = mysql_num_rows($result2);
$num3 = mysql_num_rows($result3);
$num4 = mysql_num_rows($result4);
$num5 = mysql_num_rows($result5);

?>



<table border ="1">

    <thead>
    <tr>

        <th>ID </th>
        <th>TYPE   </th>

    </tr>
    </thead>

    <tbody>

    <?php

    for($i = 0; $i<$num0;$i = $i+1)
    {

        $row = mysql_fetch_row($result0);

        echo "<tr>";
        echo "<td>" .$row[0]."</td>";
        echo "<td>" .$row[1]."</a></td>";
        echo "</tr>";


    }
    ?>

    </tbody>


</table>

<table border ="1">

    <thead>
    <tr>

        <th>ID </th>
        <th>TYPE   </th>

    </tr>
    </thead>

    <tbody>

    <?php

    for($i = 0; $i<$num1;$i = $i+1)
    {

        $row = mysql_fetch_row($result1);

        echo "<tr>";
        echo "<td>" .$row[0]."</td>";
        echo "<td>" .$row[1]."</a></td>";
        echo "</tr>";


    }
    ?>

    </tbody>


</table>

<table border ="1">

    <thead>
    <tr>

        <th>ID </th>
        <th>TYPE   </th>

    </tr>
    </thead>

    <tbody>

    <?php

    for($i = 0; $i<$num2;$i = $i+1)
    {

        $row = mysql_fetch_row($result2);

        echo "<tr>";
        echo "<td>" .$row[0]."</td>";
        echo "<td>" .$row[1]."</a></td>";
        echo "</tr>";


    }
    ?>

    </tbody>


</table>

<table border ="1">

    <thead>
    <tr>

        <th>ID </th>
        <th>TYPE   </th>

    </tr>
    </thead>

    <tbody>

    <?php

    for($i = 0; $i<$num3;$i = $i+1)
    {

        $row = mysql_fetch_row($result3);

        echo "<tr>";
        echo "<td>" .$row[0]."</td>";
        echo "<td>" .$row[1]."</a></td>";
        echo "</tr>";


    }
    ?>

    </tbody>


</table>

<table border ="1">

    <thead>
    <tr>

        <th>ID </th>
        <th>TYPE   </th>

    </tr>
    </thead>

    <tbody>

    <?php

    for($i = 0; $i<$num4;$i = $i+1)
    {

        $row = mysql_fetch_row($result4);

        echo "<tr>";
        echo "<td>" .$row[0]."</td>";
        echo "<td>" .$row[1]."</a></td>";
        echo "</tr>";


    }
    ?>

    </tbody>


</table>

<table border ="1">

    <thead>
    <tr>

        <th>ID </th>
        <th>TYPE   </th>

    </tr>
    </thead>

    <tbody>

    <?php

    for($i = 0; $i<$num5;$i = $i+1)
    {

        $row = mysql_fetch_row($result5);

        echo "<tr>";
        echo "<td>" .$row[0]."</td>";
        echo "<td>" .$row[1]."</a></td>";
        echo "</tr>";


    }
    ?>

    </tbody>


</table>


