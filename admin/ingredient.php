<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include("../system/conn_db.php");
    include("../system/head.php");
    ?>
    <title>Moon Coffee's Ingredient</title>
</head>

<body>
    <?php
    include("../system/header.php");
    ?>
    <section class="container-lg pt-5">
        <nav aria-label="breadcrumb" class ="d-flex pt-5 mt-5">
            <a class="nav nav-item text-decoration-none text-muted mb-2" href="#" onclick="history.back();">
                <i class="bi bi-arrow-left-square me-2"></i>Go back
            </a>
        </nav>
        <div class="fs-1 text-start fw-bold my-2 moon"><span>Bảng Nguyên Liệu</span></div>
        <form class="form-floating mb-1" method="GET" action="product.php">
                <div class="row "> <!-- flex-row-reverse flex-colume -->
                    <div class="mt-2 col-sm-12 col-md-10 col-lg-10">
                        <div class="input-group">
                        <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Ingredient name"
                            <?php if (isset($_GET["search"])) { ?>value="<?php echo $_GET["p_name"]; ?>" <?php } ?>>
                            <button type="submit" name="search" value="1" class="btn btn-success">Search</button>
                            <button type="reset" class="btn btn-danger" type="button"
                                onclick="javascript: window.location='ingredient.php'">Clear</button>
                        </div>
                    </div>
                    <div class="mt-2 col-sm-12 col-md-2 col-lg-2 text-end px-md-0">
                        <a href="ingredient_add.php?p_value=1" class="btn btn-primary w-100">+ Ingredient</a>
                    </div>
                </div>
            </form>

        <?php
        if (!isset($_GET["search"])) {
            $search_query = "SELECT * FROM ingredient_defaut ORDER BY id_name ASC";
        } else {
            $search_fn = $_GET["id_name"];
            $search_query = "SELECT * FROM ingredient_defaut WHERE id_name LIKE '%{$search_fn}%' ORDER BY id_name ASC";
        }
        $result = $mysqli->query($search_query);
        $row_num = $result->num_rows;
        if ($row_num == 0) {
            ?>
            <div class="row">
                <div class="col mt-2 ms-2 p-2 bg-danger text-white rounded text-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-x-circle ms-2" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg><span class="ms-2 mt-2">No ingredient found!</span>
                    <a href="ingredient.php" class="text-white">Clear Search Result</a>
                </div>
            </div>
        <?php } else { ?>
            <table
                class="mt-2 table rounded-2 table-hover  table-light table-striped table-hover align-middle caption-top mb-5">
                <caption class="text-white" >
                    <?php echo $row_num; ?> Ingredient(s)
                    <?php if (isset($_GET["search"])) { ?><br /><a href="ingredient.php"
                            class="text-decoration-none text-danger">Clear Search Result</a>
                    <?php } ?>
                </caption>
                <thead class="bg-light">
                    <tr>
                        <th scope="col-1">#</th>
                        <th scope="col-4">Name</th>
                        <th class="text-center" scope="col-2">Import Quantity</th>
                        <th class="text-end" scope="col">Import Price(VND)</th>
                        <th class="text-end" scope="col">Cost</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
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
                                <?php echo $row["id_import_quantity"] . " " . $row["id_unit"]; ?>
                            </td>
                            <td class="text-end">
                                <?php echo number_format($row["id_import_price"], "0", ",", "."); ?>
                            </td>
                            <td class="text-end">
                                <?php echo round($row["id_import_price"] / $row["id_import_quantity"], 3); ?>
                            </td>
                            <td class="text-center">
                                <a href="ingredient_edit.php?id_id=<?php echo $row["id_id"] ?>"
                                    class="btn btn-sm btn-success">Edit</a>
                                <a href="ingredient_delete.php?id_id=<?php echo $row["id_id"] ?>"
                                    class="btn btn-sm btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                    <?php }
        } ?>
            </tbody>
        </table>
    </section>
    <?php
    include("../system/footer.php");
    ?>
</body>

</html>