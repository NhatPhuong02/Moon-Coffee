<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("conn_db.php");
    include("head.php");
    ?>
    <title>Moon Coffee's Product</title>
</head>

<body>
    <?php
    include("header.php");
    ?>
    <div class="container pt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product</li>

                <li class="ms-auto"> <a href="product_add.php?p_value=1" class="btn btn-success">Add Product</a></li>
            </ol>
        </nav>
        <div class="fs-1 text-center fw-bold"><span>Bảng Sản Phẩm</span></div>
        <table class="mt-5 table rounded-5 table-light table-striped table-hover align-middle caption-top mb-5">
            <thead class="bg-light">
                <tr>
                    <th scope="col-1">#</th>
                    <th scope="col-4">Image</th>
                    <th scope="col-4">Name</th>
                    <th class="text-center" scope="col">Price(VND)</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
            $query = "SELECT * FROM product ORDER BY p_name ASC";
            $result = $mysqli->query($query);
            ?>
            <tbody>
                <?php $i = 1;
                while ($row = $result->fetch_array()) { ?>
                    <tr>
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td class="w-25"></td>
                        <td>
                            <?php echo $row["p_name"]; ?>
                        </td>
                        <td class="text-center">
                            <?php echo number_format($row["p_price"], "0", ",", "."); ?>
                        </td>
                        <td><a href="product_view.php?p_id=<?php echo $row["p_id"] ?>"
                                class="btn btn-sm btn-primary">View</a>
                            <a href="product_edit.php?p_id=<?php echo $row["p_id"] ?>"
                                class="btn btn-sm btn-outline-success">Edit</a>
                            <a href="product_delete.php?p_id=<?php echo $row["p_id"] ?>"
                                class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>



</html>