<html>
<head>
    <link rel="stylesheet" href="custom.css">
    <title>Computer-Shop</title>
</head>
<?php require 'header.php';

$getList = "SELECT TypeName FROM producttype ";
$result = mysql_query($getList);

if($_SESSION['type']==1) {

    ?>


    <div id="main">
        <form name="insert" action="product_insertion.php" method="POST">


            <table border="1">

                <tr>

                    <td>Type:</td>
                    <td><SELECT name="type">

                            <?php while ($row = mysql_fetch_array($result)) {
                                echo "<option value ='" . $row['TypeName'] . "'>" . $row['TypeName'] . "</option>";
                            } ?>

                        </SELECT>


                    </td>
                    <tr>
                    <td>Name:</td>
                    <td><input type="text" name="product" value="" size="20"/></td>

                    </tr>

                <tr>
                    <td>Cost:</td>
                    <td><input type="text" name="cost" value="" size="20"/></td>

                </tr>

                <tr>
                    <td>Qty</td>
                    <td><input type="text" name="Qty" value="" size="20"/></td>

                </tr>

                <tr>

                    <td>Sore</td>
                    <td><input type="text" name="Store" value="" size="20"/</td>


                </tr>

            </table>


            <input type="submit" value="Submit" name="Submit"/>

        </form>
    </div>
    <?php
    if (isset($_POST['Submit'])) {


        $product = $_POST['product'];
        $product_type = $_POST['type'];
        $cost = $_POST['cost'];
        $qty = $_POST['Qty'];
        $store = $_POST['Store'];




        $product_type_id;
        if ($product_type == "Case") {
            $product_type_id = 5;
        } elseif ($product_type == "CPU") {
            $product_type_id = 1;
        } elseif ($product_type == "motherBoard") {
            $product_type_id = 3;
        } elseif ($product_type == "RAM") {
            $product_type_id = 2;
        } elseif ($product_type == "Storage") {
            $product_type_id = 4;
        }


        $sqlinsert = "INSERT INTO product (PRODUCT_TYPE,STORE_ID,prodName,Cost,Qty) VALUES ('$product_type_id','$store','$product',$cost,$qty);";

        echo $sqlinsert;


        if (!mysql_query($sqlinsert)) {
            echo "something wrong";
            echo mysql_error();
        } else {

            echo "the new product is added";

        }

    }

}

else {

    header("location: index.php");

}

require "footer.php";
?>



</html>