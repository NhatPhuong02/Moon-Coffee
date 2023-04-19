<?php 
    include("conn_db.php");

    $p_id = $_GET["p_id"];

    $query = "DELETE FROM product p, ingredient i WHERE p.p_id = {$p_id} AND i.Product_p_id = {$p_id}";
    $result = $mysqli->query($query);

    if ($result){
        header("Location: product.php");
    }
?> 