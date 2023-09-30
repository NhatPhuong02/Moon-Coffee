<?php
// 
// // Phuong's config
// $servername = "localhost";
// $username = "u234424253_moon_coffee";
// $password = "Moon@1234";
// $database = "u234424253_moon_coffee";

// $mysqli =  mysqli_connect($servername, $username, $password, $database);

// if (!$mysqli){
//         die("Connection failed: " . mysqli_connect_error());
// }


//

$mysqli = mysqli_connect("localhost","root","","moon_coffee");
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

define('SITE_ROOT',realpath(dirname(__FILE__)));
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>