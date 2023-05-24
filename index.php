<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include("system/head.php");
    include("system/conn_db.php");
    if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") {
        header("location: admin/admin_index.php");
        exit();
    }

    ?>
    <title>Welcome to Moon Coffee</title>
</head>

<body>
    <?php
    include("system/header.php");
    ?>
    <div class="container-fluid position-relative" id="home" style="
            
                background-size: cover;

                background-image: linear-gradient(to right, rgb(236 98 6 / 80%), rgb(5 3 0 / 83%)),
                    url(https://images.pexels.com/photos/1695052/pexels-photo-1695052.jpeg?cs=srgb&dl=pexels-igor-haritanovich-1695052.jpg&fm=jpg);
                background-repeat: no-repeat,
                    no-repeat,
                    no-repeat;
                background-position: center;
                background-attachment: fixed;
                min-height: 400px;
            ">
        <div class="bg-opacity-50 w-75 text-center py-2 px-4 rounded-5 position-absolute top-50 start-50 translate-middle mt-1"
            id="content">
            <style>
                #content {
                    background-color: rgba(84, 45, 33, 0.5);
                    color: #dac991;
                }
            </style>
            <h3>Welcome to Moon Coffee</h3>
            <h5>Your saticfaction is our motivation</h5>
            <button type="button" class="btn btn-outline-warning btn-lg ">Read More</button>
            
        </div>


    </div>



    <?php
    include("system/footer.php");
    ?>
</body>

</html>