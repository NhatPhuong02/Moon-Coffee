<?php
    include("conn_db.php");
   

    if(isset($_POST["add_confirm"])) {
        $p_name = $_POST["p_name"];
        $p_price = (int) $_POST["p_price"];

        $query = "INSERT INTO product (p_name, p_price) VALUES ({$p_name}, {$p_price});";
        $result = $mysqli->query($query);
        
    }
    if($result){
        header("Location: product.php");
    }
?>