<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include("../system/head.php");
    include("../system/conn_db.php");

    if (isset($_POST["edit_ingredient_cfm"])) {
        $id_id = $_POST["id_id"];
        $id_name = ucwords($_POST["id_name"]);
        $id_unit = $_POST["id_unit"];
        $id_import_quantity = $_POST["id_quantity"];
        $id_import_price = $_POST["id_price"];

        $query_update = "UPDATE ingredient_defaut SET id_name = '{$id_name}', id_import_quantity= '{$id_import_quantity}', id_unit= '{$id_unit}', id_import_price= '{$id_import_price}' WHERE id_id = '{$id_id}'";
        $result = $mysqli->query($query_update);

        if ($result) {
            header("location: ingredient.php");
        } else {
            header("location: test.php");
        }
    }
    ?>
    <title>Edit Product</title>
</head>

<body>
    <?php
    $cost = 0;
    include("../system/header.php");
    $id_id = $_GET["id_id"];
    $query_ingredient = "SELECT id.* FROM ingredient_defaut id  WHERE id.id_id = {$id_id}  LIMIT 0,1";
    $result_ingredient = $mysqli->query($query_ingredient);
    $ingredient_row = $result_ingredient->fetch_array();
    ?>
    
    <div class="container pt-5" id="shop-body">
        <nav aria-label="breadcrumb" class ="d-flex">
            <a class="nav nav-item text-decoration-none text-muted mb-2" href="#" onclick="history.back();">
                <i class="bi bi-arrow-left-square me-2"></i>Go back
            </a>
        </nav>
        <div class="row row-cols-1 row-cols-md-2 mb-5 mt-5">
            <div class="col mb-3 mb-md-0 logo">
                <img src='../img/logo.png' class="img-fluid rounded-25 float-start">
            </div>
            <div class="col text-wrap">
                <h1 class="">
                    <?php echo $ingredient_row["id_name"] ?>
                </h1>
                <h3 class="">
                    <?php echo number_format($ingredient_row["id_import_price"], 0, ',', '.'); ?> VND
                </h3>
                <br>
                <div class="mt-0">
                    <div class="fs-3 mb-2 fw-bold"> Danh sách thông tin thành phần</div>
                    <form action="ingredient_edit.php" method="POST">
                        <div class="col text-wrap">
                            <div class="row input-group">
                                <div class="col-8">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default">1# Name</span>
                                        <input name="id_name" type="text" class="form-control"
                                            aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default"
                                            value="<?php echo $ingredient_row["id_name"] ?>" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default">2# Unit</span>
                                        <input name="id_unit" type="text" class="form-control"
                                            aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default"
                                            value="<?php echo $ingredient_row["id_unit"] ?>" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default">3# Import
                                            Quantity</span>
                                        <input name="id_quantity" type="text" class="form-control"
                                            aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default"
                                            value="<?php echo $ingredient_row["id_import_quantity"] ?>" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default"> 4# Import
                                            Price</span>
                                        <input name="id_price" type="text" class="form-control"
                                            aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default"
                                            value="<?php echo $ingredient_row["id_import_price"] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-amount text-end">
                                <input type="hidden" name="id_id" value="<?php echo $id_id; ?>">
                                <button class="btn btn-success w-100" type="submit"
                                    name="edit_ingredient_cfm">Accept</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("../system/footer.php");
    ?>
</body>

</html>