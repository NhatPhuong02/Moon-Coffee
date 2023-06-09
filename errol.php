<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("head.php");
    ?>
    <title>Welcome to Moon Coffee</title>
</head>

<body>
    <?php
    include("header.php");
    $test;
    if (isset($_GET["text"])) {
        $text = $_GET["text"];
    }
    ?>
    <div class="container-lg my-5 h-100 justify-content-center grid-content-center">

        <h5 class="card-title text-danger fw-bold">
            <?php
            echo $text;
            ?>
        </h5>

    </div>
</body>

</html>