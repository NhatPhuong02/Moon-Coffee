<?php

class Product {
    // properties
    public $meme_id;
    public $meme_title;
    public $meme_img;
    public $meme_user_id;
    public $conn;
    public $meme = [];
    public $memes = [];
    public $errors = [];

    // constructor (inject DB conn)
    public function __construct($conn) {
        $this->conn = $conn;
    }
    // Meme methods
    // "setter" for the meme prop
    public function fetchProduct($id) {
        $this->meme_id = $id;
        $sql = "SELECT memes.*, username
                FROM memes
                JOIN users ON users.id = memes.user_id
                WHERE memes.id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $this->meme_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows !== 1) {
            $this->errors['fetch_err'] = "Couldn't retrieve resource!";
        } else {
            $this->meme = $result->fetch_assoc();
        }
        return $this;
    }
    public function fetchMemes($offset = 0, $limit = 12) {
        $sql = "SELECT memes.*, users.username, COUNT(comments.id) AS num_comments
                FROM memes 
                JOIN users ON users.id = memes.user_id
                LEFT JOIN comments ON memes.id = comments.post_id
                GROUP BY memes.id
                LIMIT ?,?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ii", $offset, $limit);
        $stmt->execute();
        $results = $stmt->get_result();
        if($results->num_rows === 0) {
            $this->errors['fetch_err'] = "Couldn't retrieve resource!";
        } else {
            $this->memes = $results->fetch_all(MYSQLI_ASSOC);
        }
        return $this;
    }
    public function getMemes() {
        return $this->memes;
    }
    public function getMeme() {
        return $this->meme;
    }
    // success method, return T / F if $error is empty
    public function success() {
        if(empty($this->errors)) {
            return true;
        } else {
            return false;
        }
    }
    public function validateMeme($meme) {
        $this->meme_title = htmlspecialchars($meme['meme_title']);
        if(empty($this->meme_title)) {
            $this->errors['post_form_err'] = "New post fields cannot be empty!";
        }
        return $this;
    }
    public function createNewMeme() {
        $sql = "INSERT INTO memes (meme_title, meme_img, user_id, date_created) 
                VALUES (?,?,?, CURRENT_TIMESTAMP)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssi", $this->meme_title, $this->meme_img, $this->meme_user_id);
        $stmt->execute();
        if($stmt->affected_rows !== 1) {
            $this->errors['insert_err'] = "Post was not created!";
        } else {
            $this->meme_id = $stmt->insert_id;
        }
        return $this;
    }

    public function delete($id) {
        $sql = "DELETE FROM memes WHERE memes.id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $id);
        $stmt->execute();
        if($stmt->affected_rows !== 1) {
            $this->errors['delete_err'] = "Failed to delete post!";
        } 
        return $this;
    }
 
    public function update($meme) {
        $this->meme_title = htmlspecialchars($meme['meme_title']);
        $this->meme_id = $meme['id'];
        $sql = "UPDATE memes SET meme_title = ? , meme_image = ? WHERE memes.id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $this->meme_title, $this->meme_img, $this->meme_id);
        $stmt->execute();
        if($stmt->affected_rows !== 1) {
            $this->errors['update_err'] = "Failed to update post!";
        }
        return $this;
    }

}