<?php include("conn_db.php");
$query_id = "SELECT * FROM ingredient_defaut";
$result_id = $mysqli->query($query_id);
while ($row_id=$result_id->fetch_array()) {
    echo $row_id["id_name"];
}
?>