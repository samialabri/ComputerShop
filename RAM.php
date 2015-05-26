<?php

require "header.php";

$sqlget = "SELECT * FROM product WHERE PRODUCT_TYPE = 2";
$result = mysql_query($sqlget);
$user = $_SESSION['login'];
$type = $_SESSION['type'];

?>

    <div id="main">


        <form name="cpucart" action="cpu.php" method="POST">



            <table>
                <tr>

                    <th>Item</th>
                    <th>Price</th>

                </tr>
                <?php

                while ($row = mysql_fetch_array($result)) {
                    echo "<tr><td>".$row['prodName']."<td>".$row['Cost']."</td> <td><input type='text' name='Qty' value='' size='2' /></td><td><input type='submit' value='Add to Cart' name='".$row['PRODUCT_ID']."'></td></tr>";
                    if(isset($_POST[$row['PRODUCT_ID']])){
                        $id = $row['PRODUCT_ID'];
                        $qty =  $_POST['Qty'];
                        echo $qty;
                        $cost = $row['Cost'];
                        $insert="INSERT INTO order (USER_ID,USER_TYPE,P_Type,P_ID,Cost,Qty) VALUES ('$user','$type',1,'$id','$cost','$qty');";
                        mysql_query($insert);
                        echo mysql_error();
                        //echo $insert;

                    }
                } ?>


            </table>


        </form>



    </div>

<?php

require"footer.php";

?>