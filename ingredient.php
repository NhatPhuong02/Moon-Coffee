<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("head.php");
    include("conn_db.php");
    ?>
    <title>Moon COffee's Ingredient</title>
</head>

<body>
    <?php
    include("header.php");
    ?>
    <div class="container pt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ingredient</li>
                <li class="ms-auto"> <a href="ingredient_add.php" class="btn btn-success">Add Ingredient</a></li>
            </ol>
        </nav>
        <div class="fs-1 text-center fw-bold"><span>Bảng Nguyên Liệu</span></div>
        <table class="mt-5 table rounded-5 table-light table-striped table-hover align-middle caption-top mb-5">
            <thead class="bg-light">
                <tr>
                    <th scope="col-1">#</th>
                    <th scope="col-4">Name</th>
                    <th class="text-center" scope="col-2">Import Quantity</th>
                    <th class="text-center" scope="col">Import Price(VND)</th>
                    <th class="text-center" scope="col">Cost</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
            $query = "SELECT * FROM ingredient_defaut ORDER BY id_name ASC";
            $result = $mysqli->query($query);
            ?>
            <tbody>
                <?php $i = 1;
                while ($row = $result->fetch_array()) { ?>
                    <tr>
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td class="w-25">
                            <?php echo $row["id_name"]; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $row["id_import_quantity"]." ".$row["id_unit"] ; ?>
                        </td>
                        <td class="text-center">
                            <?php echo number_format($row["id_import_price"], "0", ",", "."); ?>
                        </td>
                        <td class="text-end">
                            <?php echo round($row["id_import_price"] / $row["id_import_quantity"] , 3);?>
                        </td>
                        <td>
                            <a href="ingredient_edit.php?id_id=<?php echo $row["id_id"] ?>"
                                class="btn btn-sm btn-success">Edit</a>
                            <a href="ingredient_delete.php?id_id=<?php echo $row["id_id"] ?>"
                                class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>