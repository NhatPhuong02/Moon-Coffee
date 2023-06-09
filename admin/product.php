<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include("../system/conn_db.php");
    include("../system/head.php");
    ?>
    <title>Moon Coffee's Product</title>
</head>

<body>
    <?php
    include("../system/header.php");
    ?>
    <section class="container-lg pt-5">
        <nav aria-label="breadcrumb" class="d-flex mt-5 pt-5">
            <a class="nav nav-item text-decoration-none text-muted mb-2" href="admin_index.php"
                onclick="history.back();">
                <i class="bi bi-arrow-left-square me-2 "></i>Go back
            </a>
        </nav>
        <div class="col-12 col-md-5 fs-1 text-start fw-bold moon">Bảng Sản Phẩm</div>
        <div class="col-12 col-md-7">
            <div class="row">
                <?php
                if (isset($_GET["add_rs"])) {
                    if ($_GET["add_rs"] == 1) { ?>
                        <!-- START SUCCESSFULLY UPDATE PASSWORD -->
                        <div class="row row-cols notibar">
                            <div class="col mt-2 ms-2 p-2 bg-success text-white rounded text-start w-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-check-circle ms-2" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                                <span class="ms-2 mt-2">Successfully added product </span>
                                <span class="me-2 float-end"><a class="text-decoration-none link-light"
                                        href="product.php">X</a></span>
                            </div>
                        </div>
                        <!-- END SUCCESSFULLY UPDATE PASSWORD -->
                    <?php }
                    if ($_GET["add_rs"] == 0) { ?>
                        <!-- START FAILED UPDATE PASSWORD -->
                        <div class="row row-cols notibar">
                            <div class="col mt-2 ms-2 p-2 bg-danger text-white rounded text-start w-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-circle ms-2" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg><span class="ms-2 mt-2">Failed to add product.</span>
                                <span class="me-2 float-end"><a class="text-decoration-none link-light"
                                        href="product.php">X</a></span>
                            </div>
                        </div>
                        <!-- END FAILED UPDATE PASSWORD -->
                    <?php }
                    if ($_GET["add_rs"] == 2) { ?>
                        <!-- START FAILED UPDATE PASSWORD -->
                        <div class="row row-cols notibar">
                            <div class="col mt-2 ms-2 p-2 bg-danger text-white rounded text-start w-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-circle ms-2" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg><span class="ms-2 mt-2">Failed!! Already exist product</span>
                                <span class="me-2 float-end"><a class="text-decoration-none link-light"
                                        href="product.php">X</a></span>
                            </div>
                        </div>
                        <!-- END FAILED UPDATE PASSWORD -->
                    <?php }
                }
                if (isset($_GET["up_prf"])) {
                    if ($_GET["up_prf"] == 1) {
                        ?>
                        <!-- START SUCCESSFULLY UPDATE PASSWORD -->
                        <div class="row row-cols notibar">
                            <div class="col mt-2 ms-2 p-2 bg-success text-white rounded text-start w-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-check-circle ms-2" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                                <span class="ms-2 mt-2">Successfully updated your profile!

                                    <span class="me-2 float-end"><a class="text-decoration-none link-light"
                                            href="product.php">X</a></span>
                            </div>
                        </div>
                        <!-- END SUCCESSFULLY UPDATE PASSWORD -->
                    <?php } else { ?>
                        <!-- START FAILED UPDATE PASSWORD -->
                        <div class="row row-cols notibar">
                            <div class="col mt-2 ms-2 p-2 bg-danger text-white rounded text-start w-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-circle ms-2" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg><span class="ms-2 mt-2">Failed to update your profile.</span>
                                <span class="me-2 float-end"><a class="text-decoration-none link-light"
                                        href="product.php">X</a></span>
                            </div>
                        </div>
                        <!-- END FAILED UPDATE PASSWORD -->
                    <?php }
                }
                ?>
            </div>
        </div>
        <form class="form-floating mb-1" method="GET" action="product.php">
            <div class="row "> <!-- flex-row-reverse flex-colume -->
                <div class="mt-2 col-sm-12 col-md-10 col-lg-10">
                    <div class="input-group">
                        <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Product name"
                            <?php if (isset($_GET["search"])) { ?>value="<?php echo $_GET["p_name"]; ?>" <?php } ?>>
                        <button type="submit" name="search" value="1" class="btn btn-success">Search</button>
                        <button type="reset" class="btn btn-danger" type="button"
                            onclick="javascript: window.location='product.php'">Clear</button>
                    </div>
                </div>
                <div class="mt-2 col-sm-12 col-md-2 col-lg-2 text-end px-md-0">
                    <a href="product_add.php?p_value=1" class="btn btn-primary w-100">Add Product</a>
                </div>
            </div>
        </form>
        <?php
        if (!isset($_GET["search"])) {
            $search_query = "SELECT * FROM product ORDER BY p_name ASC";
        } else {
            $search_fn = $_GET["p_name"];
            $search_query = "SELECT * FROM product WHERE p_name LIKE '%{$search_fn}%' ORDER BY p_name ASC";
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
                    </svg><span class="ms-2 mt-2">No product found!</span>
                    <a href="product.php" class="text-white">Clear Search Result</a>
                </div>
            </div>
        <?php } else { ?>
            <table
                class="mt-2 table table-hover rounded-5 table-light table-striped table-hover align-middle caption-top mb-5">
                <caption class="text-light">
                    <?php echo $row_num; ?> Product(s)
                    <?php if (isset($_GET["search"])) { ?><br /><a href="product.php"
                            class="text-decoration-none text-danger">Clear Search Result</a>
                    <?php } ?>
                </caption>
                <thead class="bg-light">
                    <tr>
                        <th class="col-1">#</th>
                        <th class="col-5 col-sm-2 col-md-2 col-lg-1">Image</th>
                        <th class="col-3 col-sm-2 col-md-2 col-lg-2">Name</th>
                        <th class="col-1 col-sm-2 col-md-3 col-lg-3 text-center ">Price(VND)</th>
                        <th class="col-2 col-sm-2 col-md-4 col-lg-4 text-center ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    while ($row = $result->fetch_array()) { ?>
                        <tr>
                            <td>
                                <?php echo $i++; ?>
                            </td>
                            <td><img src="../img/logo.png" class="img-thumbnail rounded-circle w-100 d-block"></td>
                            <td>
                                <?php echo $row["p_name"]; ?>
                            </td>
                            <td class="text-center">
                                <?php echo number_format($row["p_price"], "0", ",", "."); ?>
                            </td>
                            <td class="text-center ">
                                <a href="product_view.php?p_id=<?php echo $row["p_id"] ?>"
                                    class="btn btn-sm btn-primary m-1">View</a>
                                <a href="product_edit.php?p_id=<?php echo $row["p_id"] ?>"
                                    class="btn btn-sm btn-outline-success m-1">Edit</a>
                                <a href="product_delete.php?p_id=<?php echo $row["p_id"] ?>&value=1"
                                    class="btn btn-sm btn-outline-danger m-1">Delete</a>
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