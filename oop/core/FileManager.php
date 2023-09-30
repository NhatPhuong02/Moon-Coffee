<?php

class FileManager {
    //static properties
    public static $file_name;
    public static $temp;
    public static $file_size;
    public static $file_ext;
    public static $new_file_name;
    public static $destination;
    public static $errors = [];
    public static $img_arr = ['jpg', 'jpeg', 'png', 'gif'];

    public static function validateFile($file, $size) {
        $ext = explode("/", $file['type']);
        self::$file_ext = end($ext);
        // validate size / no err / ext allowed
        if($file['size'] > $size) {
            self::$errors['size_err'] = "File is too large";
        }

        if($file['error'] !== 0) {
            self::$errors['file_err'] = "There was an error with the file!";
        }
        if(!in_array(self::$file_ext, self::$img_arr)) {
            self::$errors['ext_err'] = "Incorrect file ext!";
        }
        // return a bool for error
        if(empty(self::$errors)) {
            echo "File is good bro";
            return true;
        } else {
            echo "File is no bueno bro";
            var_dump(self::$errors);
            return false;
        }

    }

    public static function uploadFile() {

    }

}