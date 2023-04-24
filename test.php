<?php include("conn_db.php");

?>

<div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Ingredients</span>
    <select class="form-select" id="ingredients" name="i_name_<?= $x ?>">
        <option selected>Choose...</option>
        <?php
        $query_id = "SELECT * FROM ingredient_defaut";
        $result_id = $mysqli->query($query_id);
        while ($row_id = $result_id->fetch_array()) { ?>
            <option value="<?php echo $row_id["id_id"] ?>"><?php echo $row_id["id_name"] ?>
            </option>
        <?php } ?>
    </select>
    <select class="form-select" id="ingredients" name="i_name_<?= $x ?>">
    <?php if($_P)?>    
    <option selected>Choose...</option>
        
    </select>
</div>