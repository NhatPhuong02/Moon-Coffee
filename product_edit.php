<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include("head.php");
    include("conn_db.php");

    if (isset($_POST["edit_cfm"])) {
        $p_name = $_POST["p_name"];
        $p_price = $_POST["p_price"];
        $query_p = "UPDATE product SET p_name = '{$p_name}', p_price = '{$p_price}' WHERE p_id = '{$_POST["p_id"]}'";
        $resulr_p = $mysqli->query($query_p);
    }

    if (isset($_POST["add_cfm"])) {
        $name = $_POST["new_name"];
        $quantity = $_POST["new_quantity"];
        $p_id = $_POST["p_id"];

        //check 
        $query_check = "SELECT * FROM ingredient WHERE Ingredient_defaut_id_id = '{$name}' AND Product_p_id = '{$p_id}'";
        $result_check = $mysqli->query($query_check);
        $row_check = $result_check->fetch_array();
        $numrow = $result_check->num_rows;
        // as same as 
        if ($numrow > 0) {
            // name ingredient
            if ($name == $row_check["Ingredient_defaut_id_id"]) {
                //same quantity
                if ($quantity == $row_check["i_quantity"]) {
                    ?>

                    <?php
                } else {
                    //update quantity
                    $query_update = "UPDATE ingredient SET i_quantity = '{$quantity}' WHERE Ingredient_defaut_id_id = '{$name}' AND Product_p_id = '{$p_id}'";
                    $result_update = $mysqli->query($query_update);
                }
            }
            // not same
        } else {
            $query_add = "INSERT INTO ingredient (Product_p_id, Ingredient_defaut_id_id , i_quantity) VALUES ('{$p_id}', '{$name}', '{$quantity}')";
            $result_add = $mysqli->query($query_add);
        }
    }

    ?>

    <title>Edit Product</title>
</head>

<body>
    <?php
    include("header.php");
    $p_id;
    if (isset($_GET["p_id"])) {
        $p_id = $_GET["p_id"];
    }
    if (isset($_POST["p_id"])) {
        $p_id = $_POST["p_id"];
    }
    $query_product = "SELECT p.* FROM product p  WHERE p.p_id = {$p_id}  LIMIT 0,1";
    $result_product = $mysqli->query($query_product);
    $product_row = $result_product->fetch_array();
    ?>
    <div class="container pt-5">
        <nav aria-label="breadcrumb" class="d-flex">
            <a class="nav nav-item text-decoration-none text-muted mb-2" href="product.php" onclick="history.back();">
                <i class="bi bi-arrow-left-square me-2"></i>Go back
            </a>
        </nav>
        <div class="mt-5" id="shop-body">
            <div class="row">
                <div class="col-5 mb-3 mb-md-0 logo">
                    <img src='img/logo.png' class="img-fluid rounded-25 float-start">
                </div>
                <div class="col-7 text-wrap rounded-3 mb-5" style="background-color: rgba(84, 45, 33,0.7);">
                    <div class="fs-3 mb-2 fw-bold col-6"> Thông tin thành phần</div>

                    <div class="row input-group m-0">
                        <form class="row" action="product_edit.php" method="POST">
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                                    <input name="p_name" type="text" class="form-control"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                        value="<?php echo $product_row["p_name"] ?>" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                                    <input name="p_price" type="text" class="form-control"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                        value="<?php echo $product_row["p_price"] ?>" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <input type="hidden" class="form-control" id="p_id" name="p_id"
                                    value="<?php echo $p_id ?>">
                                <button type="submit" name="edit_cfm" class="btn btn-success w-100" si>Add</button>
                            </div>
                        </form>
                        <br>
                        <form action="product_edit.php" method="POST" class="mt-0 p-0">
                            <div class="row">
                                <div class="fs-3 mb-2 fw-bold col-6"> Danh sách thành phần</div>
                                <div class="form-amount text-end col-6">
                                    <input type="hidden" class="form-control" id="p_id" name="p_id"
                                        value="<?php echo $p_id ?>">
                                </div>
                            </div>
                            <div>
                                <table
                                    class="table table-rounded-2 table-fixed table-light table-striped table-hover align-middle caption-top mb-2"
                                    style=" display: inline-block;  height: 233px;  overflow-y: scroll;">
                                    <thead class="bg-light sticky-top">
                                        <tr>
                                            <th scope="col-1">#</th>
                                            <th class="col-3">Name</th>
                                            <th class="col-3 text-center">Quantity</th>
                                            <th class="col-3 text-center">Unit (g/ml)</th>
                                            <th class="col-1 text-center">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $query_ingredient = "SELECT i.*, id.* FROM ingredient i, ingredient_defaut id  WHERE Product_p_id = {$p_id} AND id.id_id = Ingredient_defaut_id_id";
                                        $result_ingredient = $mysqli->query($query_ingredient);
                                        ?>
                                        <?php $i = 1;
                                        ?>

                                        <?php
                                        while ($ingredient_row = $result_ingredient->fetch_array()) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i++; ?>
                                                </td>
                                                <td class="w-25">
                                                    <?php echo $ingredient_row["id_name"]; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $ingredient_row["i_quantity"]; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $ingredient_row["id_unit"]; ?>
                                                </td>
                                                <td>
                                                    <a href="product_delete.php?i_id=<?php echo $ingredient_row["i_id"] ?>&p_id=<?= $p_id ?>&value=2"
                                                        type="submit" name="delete_cfm"
                                                        class="btn btn-sm btn-outline-danger w-100">Delete</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="collapse" id="collapseExample">
                                <div class="fs-3 fw-bold">Add Ingredient</div>
                                <table
                                    class="table rounded-5 table-warning table-striped table-hover align-middle caption-top ">
                                    <thead class="bg-light">
                                        <tr>
                                            <th scope="col-1">#</th>
                                            <th class="col-4">Name</th>
                                            <th class="col-2 text-center">Quantity</th>
                                            <th class="text-center" scope="col-1">Unit (g/ml)</th>
                                            <th class="text-center" scope="col-1">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td>
                                            <?php echo $i++; ?>
                                        </td>
                                        <td class="w-25">
                                            <select class="form-select" name="new_name" required>
                                                <option value="" selected>Choose...</option>
                                                <?php
                                                $query_id = "SELECT * FROM ingredient_defaut GROUP BY id_name ASC";
                                                $result_id = $mysqli->query($query_id);
                                                while ($row_id = $result_id->fetch_array()) { ?>
                                                    <option value="<?php echo $row_id["id_id"] ?>"><?php echo $row_id["id_name"] ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                        <td class="text-center w-25">
                                            <input class="form-control" name="new_quantity" type="number" min="1"
                                                class="" required></input>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-select" id="ingredients" name="new_unit" disabled>
                                                <option value="" selected>Auto</option>
                                                <option value="g">g</option>
                                                <option value="ml">ml</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" name="add_cfm"
                                                class="btn btn-sm btn-success w-100">Add</button>
                                        </td>
                                    </tbody>
                                </table>
                            </div>
                            <p>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    Add Ingredient
                                </button>
                            </p>
                        </form>
                    </div>
                    <a href="product.php" class="btn btn-success mt-1 w-100 mb-3" name="edit_product_cfm"
                        type="submit">Accept</a>
                </div>
            </div>
        </div>
    </div>
    <!-- <Script>window.history.forward()</Script>   -->
    <!-- <script>
        $(document).ready(function () {
            $('#table').DataTable({
                scrollX: true,
            });
        });
    </script> -->
    <?php
    include("footer.php");
    ?>
</body>

</html>