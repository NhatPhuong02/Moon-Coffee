<!DOCTYPE html>
<html lang="en">

<head>
    <?php
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
            </ol>
        </nav>
        <form action="add_product.php" method="post">
            <div class="row mt-5">
                <div class="col-7">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>