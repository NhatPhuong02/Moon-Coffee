<?php

class Comment {
    public $comment = [];
    public $comments = [];
    public $comment_text;
    public $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }


    public function fetchComments($post_id) {
        $sql = "SELECT comments.*, username
        FROM comments
        JOIN users ON users.id = comments.user_id
        WHERE comments.post_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('s', $post_id);
        $stmt->execute();
        $results = $stmt->get_result();
        $this->comments = $results->fetch_all(MYSQLI_ASSOC);
        return $this;
    }

    public function getComments() {
        return $this->comments;
    }
}