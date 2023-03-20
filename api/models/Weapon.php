<?php

class Weapon {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Retrieve all weapons from the database
    public function getAll() {
        $query = "SELECT * FROM allweapons";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}

?>
