<!DOCTYPE html>
<html lang="en">

<head>
    <?php    
    session_start();
    include("../system/head.php");
    include("../system/conn_db.php");
    ?>
    <title>View Product</title>
</head>

<body>
    <?php
    $cost = 0;
    include("../system/header.php");
    $p_id = $_GET["p_id"];
    $query_product = "SELECT p.* FROM product p  WHERE p.p_id = {$p_id}  LIMIT 0,1";
    $result_product = $mysqli->query($query_product);
    $product_row = $result_product->fetch_array();
    ?>
    <div class="container pt-5" id="shop-body">
        <nav aria-label="breadcrumb" class ="d-flex">
            <a class="nav nav-item text-decoration-none text-muted mb-2" href="product.php" onclick="history.back();">
                <i class="bi bi-arrow-left-square me-2"></i>Go back
            </a>
        </nav>
        <div class="row">
            <div class="col-12 col-md-5 col-xl-6 mb-3 mb-md-0 logo text-center ">
                <img src='../img/logo.png' class="img-fluid rounded-25 ">
            </div>
            <div class="col-12 col-md-7 col-xl-6 text-wrap pb-4 rounded-3 " style="background-color: rgba(84, 45, 33,0.7);">
                <div class="h2 fw-bold">
                    <?php echo $product_row["p_name"] ?>
                </div>
                <div class="h3 fw-bold">
                    <?php echo number_format($product_row["p_price"], 0, ',', '.'); ?> VND
                </div>
                <div class="mt-0">
                    <div class="fs-3 mb-2 fw-bold"> Danh sách thành phần</div>
                    <table class="table rounded-1 table-light table-striped table-hover align-middle caption-top mb-5 " style=" display: inline-block;  height: 233px;  overflow-y: scroll;">
                        <thead class="bg-light sticky-top " style="z-index: 0;">
                            <tr>
                                <th scope="col-1">#</th>
                                <th scope="col-4">Name</th>
                                <th class="text-center" scope="col-4">Quantity</th>
                                <th class="text-center" scope="col">Unit (g/ml)</th>
                                <th scope="col">Cost (VND)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query_ingredient = "SELECT i.*, id.* FROM ingredient i, ingredient_defaut id  WHERE Product_p_id = {$p_id} AND id.id_id = Ingredient_defaut_id_id ORDER BY id_name ASC" ;
                            $result_ingredient = $mysqli->query($query_ingredient);
                            ?>
                            <?php $i = 1;
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
                                        <?php echo $ingredient_row["i_unit"]; ?>
                                    </td>
                                    <td>
                                        <?php
                                            $cost += $ingredient_row["i_quantity"]*($ingredient_row["id_import_price"] / $ingredient_row["id_import_quantity"]);
                                            echo round($ingredient_row["i_quantity"]*($ingredient_row["id_import_price"] / $ingredient_row["id_import_quantity"]), 3);
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="row bg-light mb-3 mx-1">
                        <div class="col fs-3 text-center ps-0 fw-bold">Cost:</div>
                        <div class="col fs-3 text-center pe-0 fw-bold"><?= number_format(round($cost,3), "0", ",", ".") ." VND"; ?></div>
                    </div>
                </div>
                <div class="form-amount text-end">
                    <input type="hidden" class="form-control" id="m_id" name="m_id" value="<?php echo $m_id ?>">
                    <a href="product_edit.php?p_id=<?= $p_id ?>" class="btn btn-success w-25" type="submit"
                        title="add to cart" name="addtocart">Edit</a>
                    <a href="product_delete.php?p_id=<?= $p_id ?>&value=1" class="btn btn-danger w-25" type="submit"
                        title="add to cart" name="addtocart">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("../system/footer.php");
    ?>
</body>

</html>