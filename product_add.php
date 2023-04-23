<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("head.php");
    include("conn_db.php");
    $num;
    if (isset($_POST["add_confirm"])) {
        $p_name = ucwords ($_POST["p_name"]);
        $p_price = (int) $_POST["p_price"];
        $num = $_POST["p_num"];
        $value = 0;

    }
    if (isset($_GET["p_value"])) {
        $value = $_GET["p_value"];
    }

    if (isset($_POST["add_confirm_ingredient"])) {

        $p_name2 = $_POST["p_name2"];
        $p_price2 = (int) $_POST["p_price2"];

        $query_product = "INSERT INTO product (p_name, p_price) VALUES ('{$p_name2}', '{$p_price2}')";
        $result_product = $mysqli->query($query_product);

        if ($result_product) {
            $query = "SELECT * FROM product WHERE p_name = '{$p_name2}'";
            $result = $mysqli->query($query);
            $row = $result->fetch_array();

            if ($result) {
                $number;
                if (isset($_POST["i_name_1"])) {
                    $i_name_1 = $_POST["i_name_1"];
                    $i_quantity_1 = $_POST["i_quantity_1"];
                    $i_unit_1 = $_POST["i_unit_1"];
                    $number = 1;
                }
                if (isset($_POST["i_name_2"])) {
                    $i_name_2 = $_POST["i_name_2"];
                    $i_quantity_2 = $_POST["i_quantity_2"];
                    $i_unit_2 = $_POST["i_unit_2"];
                    $number = 2;
                }
                if (isset($_POST["i_name_3"])) {
                    $i_name_3 = $_POST["i_name_3"];
                    $i_quantity_3 = $_POST["i_quantity_3"];
                    $i_unit_3 = $_POST["i_unit_3"];
                    $number = 3;
                }
                if (isset($_POST["i_name_4"])) {
                    $i_name_4 = $_POST["i_name_4"];
                    $i_quantity_4 = $_POST["i_quantity_4"];
                    $i_unit_4 = $_POST["i_unit_4"];
                    $number = 4;
                }
                if (isset($_POST["i_name_5"])) {
                    $i_name_5 = $_POST["i_name_5"];
                    $i_quantity_5 = $_POST["i_quantity_5"];
                    $i_unit_5 = $_POST["i_unit_5"];
                    $number = 5;
                }
                if (isset($_POST["i_name_6"])) {
                    $i_name_6 = $_POST["i_name_6"];
                    $i_quantity_6 = $_POST["i_quantity_6"];
                    $i_unit_6 = $_POST["i_unit_6"];
                    $number = 6;
                }
                if (isset($_POST["i_name_7"])) {
                    $i_name_7 = $_POST["i_name_7"];
                    $i_quantity_7 = $_POST["i_quantity_7"];
                    $i_unit_7 = $_POST["i_unit_7"];
                    $number = 7;
                }
                if (isset($_POST["i_name_8"])) {
                    $i_name_8 = $_POST["i_name_8"];
                    $i_quantity_8 = $_POST["i_quantity_8"];
                    $i_unit_8 = $_POST["i_unit_8"];
                    $number = 8;
                }
                if (isset($_POST["i_name_9"])) {
                    $i_name_9 = $_POST["i_name_9"];
                    $i_quantity_9 = $_POST["i_quantity_9"];
                    $i_unit_9 = $_POST["i_unit_9"];
                    $number = 9;
                }

                switch ($number) {
                    case 9:
                        $query_ingredient = "INSERT INTO ingredient (Product_p_id, i_name, i_quantity, i_unit) VALUES ('{$row["p_id"]}', '{$i_name_1}', '{$i_quantity_1}', '{$i_unit_1}'),('{$row["p_id"]}', '{$i_name_2}', '{$i_quantity_2}', '{$i_unit_2}'),('{$row["p_id"]}', '{$i_name_3}', '{$i_quantity_3}', '{$i_unit_3}'),('{$row["p_id"]}', '{$i_name_4}', '{$i_quantity_4}', '{$i_unit_4}'),('{$row["p_id"]}', '{$i_name_5}', '{$i_quantity_5}', '{$i_unit_5}'),('{$row["p_id"]}', '{$i_name_6}', '{$i_quantity_6}', '{$i_unit_6}'),('{$row["p_id"]}', '{$i_name_7}', '{$i_quantity_7}', '{$i_unit_7}'),('{$row["p_id"]}', '{$i_name_8}', '{$i_quantity_8}', '{$i_unit_8}'),('{$row["p_id"]}', '{$i_name_9}', '{$i_quantity_9}', '{$i_unit_9}')";
                        $result_ingredient = $mysqli->query($query_ingredient);
                        break;
                    case 8:
                        $query_ingredient = "INSERT INTO ingredient (Product_p_id, i_name, i_quantity, i_unit) VALUES ('{$row["p_id"]}', '{$i_name_1}', '{$i_quantity_1}', '{$i_unit_1}'),('{$row["p_id"]}', '{$i_name_2}', '{$i_quantity_2}', '{$i_unit_2}'),('{$row["p_id"]}', '{$i_name_3}', '{$i_quantity_3}', '{$i_unit_3}'),('{$row["p_id"]}', '{$i_name_4}', '{$i_quantity_4}', '{$i_unit_4}'),('{$row["p_id"]}', '{$i_name_5}', '{$i_quantity_5}', '{$i_unit_5}'),('{$row["p_id"]}', '{$i_name_6}', '{$i_quantity_6}', '{$i_unit_6}'),('{$row["p_id"]}', '{$i_name_7}', '{$i_quantity_7}', '{$i_unit_7}'),('{$row["p_id"]}', '{$i_name_8}', '{$i_quantity_8}', '{$i_unit_8}')";
                        $result_ingredient = $mysqli->query($query_ingredient);
                        break;
                    case 7:
                        $query_ingredient = "INSERT INTO ingredient (Product_p_id, i_name, i_quantity, i_unit) VALUES ('{$row["p_id"]}', '{$i_name_1}', '{$i_quantity_1}', '{$i_unit_1}'),('{$row["p_id"]}', '{$i_name_2}', '{$i_quantity_2}', '{$i_unit_2}'),('{$row["p_id"]}', '{$i_name_3}', '{$i_quantity_3}', '{$i_unit_3}'),('{$row["p_id"]}', '{$i_name_4}', '{$i_quantity_4}', '{$i_unit_4}'),('{$row["p_id"]}', '{$i_name_5}', '{$i_quantity_5}', '{$i_unit_5}'),('{$row["p_id"]}', '{$i_name_6}', '{$i_quantity_6}', '{$i_unit_6}'),('{$row["p_id"]}', '{$i_name_7}', '{$i_quantity_7}', '{$i_unit_7}')";
                        $result_ingredient = $mysqli->query($query_ingredient);
                        break;
                    case 6:
                        $query_ingredient = "INSERT INTO ingredient (Product_p_id, Ingredient_defaut_id_id , i_quantity, i_unit) VALUES ('{$row["p_id"]}', '{$i_name_1}', '{$i_quantity_1}', '{$i_unit_1}'),('{$row["p_id"]}', '{$i_name_2}', '{$i_quantity_2}', '{$i_unit_2}'),('{$row["p_id"]}', '{$i_name_3}', '{$i_quantity_3}', '{$i_unit_3}'),('{$row["p_id"]}', '{$i_name_4}', '{$i_quantity_4}', '{$i_unit_4}'),('{$row["p_id"]}', '{$i_name_5}', '{$i_quantity_5}', '{$i_unit_5}'),('{$row["p_id"]}', '{$i_name_6}', '{$i_quantity_6}', '{$i_unit_6}')";
                        $result_ingredient = $mysqli->query($query_ingredient);
                        break;
                    case 5:
                        $query_ingredient = "INSERT INTO ingredient (Product_p_id, Ingredient_defaut_id_id , i_quantity, i_unit) VALUES ('{$row["p_id"]}', '{$i_name_1}', '{$i_quantity_1}', '{$i_unit_1}'),('{$row["p_id"]}', '{$i_name_2}', '{$i_quantity_2}', '{$i_unit_2}'),('{$row["p_id"]}', '{$i_name_3}', '{$i_quantity_3}', '{$i_unit_3}'),('{$row["p_id"]}', '{$i_name_4}', '{$i_quantity_4}', '{$i_unit_4}'),('{$row["p_id"]}', '{$i_name_5}', '{$i_quantity_5}', '{$i_unit_5}')";
                        $result_ingredient = $mysqli->query($query_ingredient);
                        break;
                    case 4:
                        $query_ingredient = "INSERT INTO ingredient (Product_p_id, Ingredient_defaut_id_id , i_quantity, i_unit) VALUES ('{$row["p_id"]}', '{$i_name_1}', '{$i_quantity_1}', '{$i_unit_1}'),('{$row["p_id"]}', '{$i_name_2}', '{$i_quantity_2}', '{$i_unit_2}'),('{$row["p_id"]}', '{$i_name_3}', '{$i_quantity_3}', '{$i_unit_3}'),('{$row["p_id"]}', '{$i_name_4}', '{$i_quantity_4}', '{$i_unit_4}')";
                        $result_ingredient = $mysqli->query($query_ingredient);
                        break;
                    case 3:
                        $query_ingredient = "INSERT INTO ingredient (Product_p_id, Ingredient_defaut_id_id , i_quantity, i_unit) VALUES ('{$row["p_id"]}', '{$i_name_1}', '{$i_quantity_1}', '{$i_unit_1}'),('{$row["p_id"]}', '{$i_name_2}', '{$i_quantity_2}', '{$i_unit_2}'),('{$row["p_id"]}', '{$i_name_3}', '{$i_quantity_3}', '{$i_unit_3}')";
                        $result_ingredient = $mysqli->query($query_ingredient);
                        break;
                    case 2:
                        $query_ingredient = "INSERT INTO ingredient (Product_p_id, Ingredient_defaut_id_id , i_quantity, i_unit) VALUES ('{$row["p_id"]}', '{$i_name_1}', '{$i_quantity_1}', '{$i_unit_1}'),('{$row["p_id"]}', '{$i_name_2}', '{$i_quantity_2}', '{$i_unit_2}')";
                        $result_ingredient = $mysqli->query($query_ingredient);
                        break;
                    default:
                        $query_ingredient = "INSERT INTO ingredient (Product_p_id, Ingredient_defaut_id_id , i_quantity, i_unit) VALUES ('{$row["p_id"]}', '{$i_name_1}', '{$i_quantity_1}', '{$i_unit_1}')";
                        $result_ingredient = $mysqli->query($query_ingredient);
                        break;
                }
                if ($result_ingredient) {
                    header("location: product.php");
                } else {
                    header("location: errol.php?errol=1");
                }
            } else {
                header("location: errol.php?errol=2");
            }
        } else {
            header("location: errol.php?errol=2");
        }
    }
    ?>
    <title>Add Product</title>
</head>

<body>
    <?php
    include("header.php");
    ?>
    <?php if ($value == 1) { ?>
        <div class="container pt-5">
            <form action="product_add.php" method="POST">
                <div class="form_input_product px-3 rounded-3" style="background-color: rgba(84, 45, 33,0.7);">
                    <div class="row mt-5 pt-3">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                                <input name="p_name" type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default" required>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                                <input name="p_price" type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default" required>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Quantity of Ingredients</span>
                                <input type="number" name="p_num" max="9" min="1" value="1" type="text" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row py-3 justify-content-center">
                    <button type="submit" class="btn btn-success w-25" name="add_confirm">Next</button>
                </div>
            </form>
        </div>
    <?php } else { ?>
        <div class="container pt-5">
            <form action="product_add.php" method="POST">
                <div class="form_input_ingredients px-3 rounded-3" style="background-color: rgba(84, 45, 33,0.7);">
                    <!-- -------------------------------------------------------------- -->
                    <?php for ($x = 1; $x < $num + 1; $x++) { ?>
                        <div class="row pt-3">
                            <div class="col-1 text-center" style="width: 5.33333333%;">
                                <span class="btn btn-success"><i class="fa-solid fa-flip text-white" ><?=$x?></i>
                                </span>
                            </div>
                            <div class="col-5">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Ingredients</span>
                                    <select class="form-select" id="ingredients" name="i_name_<?= $x ?>">
                                        <option selected>Choose...</option>
                                        <?php
                                        $query_id = "SELECT * FROM ingredient_defaut";
                                        $result_id = $mysqli->query($query_id);
                                        while ($row_id = $result_id->fetch_array()) { ?>
                                            <option value="<?php echo $row_id["id_id"] ?>"><?php echo $row_id["id_name"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <input name="p_name2" type="hidden" class="form-control" value="<?= $p_name ?>">
                            <input name="p_price2" type="hidden" class="form-control" value="<?= $p_price ?>">
                            <div class="col-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Quantity</span>
                                    <input name="i_quantity_<?= $x ?>" type="text" class="form-control"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Units</label>
                                    <select class="form-select" id="inputGroupSelect01" name="i_unit_<?= $x ?>">
                                        <option value="g" selected>G</option>
                                        <option value="ml">ML</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                    <?php } ?>
                </div>
                <div class="row py-3 justify-content-center">
                    <button type="submit" class="btn btn-success w-25" name="add_confirm_ingredient">Add Product</button>
                </div>
            </form>
        <?php } ?>
</body>

</html>