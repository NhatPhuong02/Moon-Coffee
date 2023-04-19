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
    $errol = $_GET["errol"];
    ?>
    <div class="container my-5 h-100">
        <div class="card text-bg-dark">
            <img src="img/1421.jpg_wh860.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title text-danger fw-bold">
                    <?php if ($errol==1) {echo "Lỗi";}?>
                    <?php if ($errol==2) {echo "Ngu";}?>

                </h5>

            </div>
        </div>
    </div>
</body>

</html>