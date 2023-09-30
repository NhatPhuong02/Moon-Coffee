
<?php
    function sanitize_my_email($field) {

        // Loại bỏ ký tự không hợp lệ
        $field = filter_var($field, FILTER_SANITIZE_EMAIL);

        // Xác thực Email
        if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    $to_email = 'name@company.com';
    $subject = 'Testing PHP Mail';
    $message = 'This mail is sent using the PHP mail ';
    $headers = 'From: noreply@company.com';

    // Kiểm tra xem địa chỉ nhận có hợp lệ không
    $secure_check = sanitize_my_email($to_email);
    if ($secure_check == false) {
        echo "Invalid input";
    } else { //send email 
        mail($to_email, $subject, $message, $headers);
        echo "This email is sent using PHP Mail";
    }
?>