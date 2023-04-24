<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("head.php");
    include("conn_db.php");

    if (isset($_POST["edit_product_cfm"])) {
        header("location: product.php");
    }
    ?>
    <title>Welcome to Moon Coffee</title>
</head>

<body>
    <?php
    include("header.php");
    $p_id;
    if(isset($_GET["p_id"])){
        $p_id = $_GET["p_id"];
    }
    if(isset($_POST["p_id"])){
        $p_id = $_POST["p_id"];
    }
    $query_product = "SELECT p.* FROM product p  WHERE p.p_id = {$p_id}  LIMIT 0,1";
    $result_product = $mysqli->query($query_product);
    $product_row = $result_product->fetch_array();
    ?>
    <div class="container px-5 py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="product.php">Product</a></li>
                <li class="breadcrumb-item"><a href="product_view.php?p_id=<?=$p_id?>">View Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
            </ol>
        </nav>
        <form action="product_edit.php" class="mt-5" method="POST" id="shop-body">
            <div class="row row-cols-1 row-cols-md-2 mb-5">
                <div class="col mb-3 mb-md-0 logo">
                    <img src='img/logo.png' class="img-fluid rounded-25 float-start">
                </div>
                <div class="col text-wrap">
                    <div class="row input-group">
                        <div class="col-7">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                                <input name="p_name" type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default"
                                    value="<?php echo $product_row["p_name"] ?>" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                                <input name="p_price" type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default"
                                    value="<?php echo $product_row["p_price"] ?>" required>
                            </div>
                        </div>
                        <br>
                        <div class="mt-0">
                            <div class="fs-3 mb-2 fw-bold"> Danh sách thành phần</div>
                            <table
                                class="table rounded-5 table-light table-striped table-hover align-middle caption-top mb-5">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col-1">#</th>
                                        <th scope="col-4">Name</th>
                                        <th scope="col-4">Quantity</th>
                                        <th class="text-center" scope="col">Unit (g/ml)</th>
                                    </tr>
                                </thead>
                                <tbody id="table">
                                    <?php
                                    $query_ingredient = "SELECT i.*, id.* FROM ingredient i, ingredient_defaut id  WHERE Product_p_id = {$p_id} AND id.id_id = Ingredient_defaut_id_id";
                                    $result_ingredient = $mysqli->query($query_ingredient);
                                    ?>
                                    <?php $i = 1;
                                    while ($ingredient_row = $result_ingredient->fetch_array()) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $i++; ?>
                                            </td>
                                            <td class="w-25">
                                                <input type="text" class=""
                                                    value="<?php echo $ingredient_row["id_name"]; ?>"></input>
                                            </td>
                                            <td class="text-center w-25">
                                                <input type="text" class=""
                                                    value="<?php echo $ingredient_row["i_quantity"]; ?>"></input>
                                            </td>
                                            <td class="text-center">
                                                <input type="text" class=""
                                                    value="<?php echo $ingredient_row["i_unit"]; ?>"></input>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="form-amount text-start">
                            <input type="hidden" class="form-control" id="p_id" name="p_id" value="<?php echo $p_id ?>">
                            <button class="btn btn-primary">Add Ingredient</button>
                        </div>
                    </div>
                    <button class="btn btn-success mt-5 w-100" name="edit_product_cfm" type="submit">Accept</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>