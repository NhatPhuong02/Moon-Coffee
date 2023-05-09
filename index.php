<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include("system/head.php");
    include("system/conn_db.php");
    if(!isset($_SESSION["firstname"]))
    {
        header("location: sign.php");
    }
    if(isset($_SESSION["role"]) && $_SESSION["role"] == "admin" )
    {
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
    <?php
    include("system/footer.php");
    ?>
</body>

</html>