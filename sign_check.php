<?php
session_start();
include("system/conn_db.php");
if (isset($_POST["signin_cfm"])) {
    $u_email = $_POST["u_email"];
    $u_password = $_POST["u_password"];

    $query_signin = "SELECT * FROM user WHERE u_email = '{$u_email}'";
    $result_signin = $mysqli->query($query_signin);
    $row = $result_signin->fetch_array();
    if ($query_signin) {
        if ($result_signin->num_rows > 0) {
            if ($u_password == $row['u_password']) {
                $_SESSION['firstname'] = $row['u_firstname'];
                $_SESSION['lastname'] = $row['u_lastname'];
                $_SESSION['email'] = $row['u_email'];
                $_SESSION['id'] = $row['u_id'];
                $_SESSION['phone'] = $row['u_Phone'];
                $_SESSION['gender'] = $row['u_gender'];
                $_SESSION['address'] = $row['u_address'];
                $_SESSION['avatar'] = $row['u_avatar'];
                $_SESSION['role'] = $row['u_role'];
                
                if($_SESSION['role'] == "admin"){
                    header("Location: admin/admin_index.php");
                    exit(1);
                }
                header("Location: index.php");
                exit(1);
            } else {
                header("location: errol.php?text=Errol!! Sai mật khẩu");
            }
        } else {
            header("location: errol.php?text=Errol!! Sai email");
        }
    } else {
        header("location: errol.php?text=Errol!! Sai sql");
    }
}
?>