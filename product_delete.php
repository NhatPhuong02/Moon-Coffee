<?php 
    include("conn_db.php");

    $p_id = $_GET["p_id"];

    $query_ingredient = "DELETE FROM ingredient WHERE Product_p_id = '{$p_id}'";
    $result_ingredient = $mysqli->query($query_ingredient);

    $query_product = "DELETE FROM product WHERE p_id = '{$p_id}'";
    $result_product = $mysqli->query($query_product);

    if ($result_ingredient && $result_product ) {
        header("Location: product.php");
    }
?> 