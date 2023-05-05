<?php
include("conn_db.php");

$query_update = "UPDATE ingredient_defaut SET id_name = 'gà', id_import_quantity= '123', id_unit= 'g', id_import_price= '123' WHERE id_id = '30'";
$result_update = $mysqli->query($query_update);

if ($result_update) {
    echo "ok";
} else {
    echo "deo";
}
?>
<button id="go-forward">Go Forward!</button>

