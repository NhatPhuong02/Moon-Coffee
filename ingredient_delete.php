<?php
    include("conn_db.php");
    $id_id = $_GET["id_id"];

    $query_ingredient = "DELETE FROM ingredient WHERE Ingredient_defaut_id_id  = '{$id_id}'";
    $result_ingredient = $mysqli->query($query_ingredient);

    $query_id = "DELETE FROM ingredient_defaut WHERE id_id = '{$id_id}'";
    $result_id = $mysqli->query($query_id);

    if($result_id && $result_ingredient)
    {
        header("location: ingredient.php");
    }
?>