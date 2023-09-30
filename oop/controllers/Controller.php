<?php

class Controller {
    // properties
    public $conn;
    public $req;

    public function __construct()
    {
        // get access to the post reqest arr
        $this->req = $_POST;
        // CSRF Middleware
        // CSRF::checkToken($this->req);
        // bring in db connection
        $this->conn = DB::getConn();
    }
}