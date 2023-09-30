<?php

class HomeController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $meme = new Meme($this->conn);
        $memes = $meme->fetchMemes()->getMemes();
        include "views/home.php";
    }
}