<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("head.php");
    include("conn_db.php");
    ?>
    <title>Welcome to Moon Coffee</title>
</head>

<body>

    <?php
    $cost = 0;
    include("header.php");
    $p_id = $_GET["p_id"];
    $query_product = "SELECT p.* FROM product p  WHERE p.p_id = {$p_id}  LIMIT 0,1";
    $result_product = $mysqli->query($query_product);
    $product_row = $result_product->fetch_array();
    ?>
    <div class="container px-5 py-4" id="shop-body">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="product.php">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Product</li>
            </ol>
        </nav>
        <div class="row row-cols-1 row-cols-md-2 mb-5 mt-5">
            <div class="col mb-3 mb-md-0 logo">
                <img src='img/logo.png' class="img-fluid rounded-25 float-start">
            </div>
            <div class="col text-wrap">
                <h1 class="">
                    <?php echo $product_row["p_name"] ?>
                </h1>
                <h3 class="">
                    <?php echo number_format($product_row["p_price"], 0, ',', '.'); ?> VND
                </h3>
                <br>
                <div class="mt-0">
                    <div class="fs-3 mb-2 fw-bold"> Danh sách thành phần</div>
                    <table class="table rounded-5 table-light table-striped table-hover align-middle caption-top mb-5">
                        <thead class="bg-light">
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
                    <a href="product_delete.php?p_id=<?= $p_id ?>" class="btn btn-danger w-25" type="submit"
                        title="add to cart" name="addtocart">Delete</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>