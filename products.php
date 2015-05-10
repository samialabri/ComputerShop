<link rel="stylesheet" href="main.css">
<?php

require("header.php");

$result = mysql_query("SELECT * FROM product;");

$num = mysql_num_rows($result);

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

        for($i = 0; $i<$num;$i = $i+1)
        {

            $row = mysql_fetch_row($result);

            echo "<tr>";
            echo "<td>" .$row[0]."</td>";
            echo "<td> <a href ='$cpu'>" .$row[1]."</a></td>";
            echo "</tr>";


        }
        ?>

        </tbody>
        </table>
