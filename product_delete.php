<?php
include("conn_db.php");
$value = $_GET["value"];
if ($value == 1) {
    $p_id = $_GET["p_id"];

    $query_ingredient = "DELETE FROM ingredient WHERE Product_p_id = '{$p_id}'";
    $result_ingredient = $mysqli->query($query_ingredient);

    $query_product = "DELETE FROM product WHERE p_id = '{$p_id}'";
    $result_product = $mysqli->query($query_product);

    if ($result_ingredient && $result_product) {
        header("Location: product.php");
    }
}
if ($value == 2) {
    $i_id = $_GET["i_id"];
    $p_id = $_GET["p_id"];
    $query_delete = "DELETE FROM ingredient WHERE i_id = '{$i_id}'";
    $result_delete = $mysqli->query($query_delete);
    if ($query_delete) {
        header("location: product_edit.php?p_id=$p_id");
    }
}
?>