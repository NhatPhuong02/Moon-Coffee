<?php
    class MemesController extends Controller {
        public function __construct() {
            parent::__construct();
        }
        public function getMeme($id) {
            $meme = new Meme($this->conn);
            $comment = new Comment($this->conn);
            if($meme->fetchMeme($id)->success()) {
                $meme = $meme->getMeme();
                $comments = $comment->fetchComments($meme['id'])->getComments();
                include "views/single_meme.php";
            } else {
                include "views/_404.php";
            }
        }
        public function newMeme() {
            include "views/inc/create_meme.php";
        }
        public function create() {
            $meme = new Meme($this->conn);
            if($meme->validateMeme($this->req)->success()) {
               if($meme->createNewMeme()->success()) {
                Messenger::setMsg("New post created!", "success");
                header("Location: " . ROOT . "memes/get/" . $meme->meme['id']);
               }
            } else {
                $errors = $meme->errors;
                Messenger::setMsg(strval("Failed to create! " . $errors["post_form_err"]), "danger");    
                include "views/create_meme.php";
            }
            //FileManager::validateFile($this->files['image'], 5000000);
        }
        public function delete() {
            $meme = new Meme($this->conn);
            $meme->fetchMeme($this->req['delete']);
            if($_SESSION['user_id'] == $meme->meme['user_id'] || $_SESSION['user_role'] == 1) {
               if($meme->delete($this->req['delete'])->success()) {
                Messenger::setMsg("Meme is deleted!", "warning");
                Router::redirect("");
               }
            } else {
                include "views/_403.php";
            }
        }
        public function update() {
            $meme = new Meme($this->conn);
            $meme->fetchMeme($this->req['meme_id']);
            if($_SESSION['user_id'] == $meme->meme['user_id']) {
                if($meme->update($this->req)->success()) {
                    Messenger::setMsg("Meme is updated!", "success");
                    Router::redirect("memes/get/" . $this->req['meme_id']);
                }
            }           
        }
    }
    
?>