<?php
// Phuong's config
// $mysqli = new mysqli("localhost","root","","moon_coffee", 3306);

// if ($mysqli -> connect_errno){
//     header("location: db_error.php");
//     exit(1);
// }

$mysqli = mysqli_connect("localhost","root","","moon_coffee");
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

define('SITE_ROOT',realpath(dirname(__FILE__)));
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>