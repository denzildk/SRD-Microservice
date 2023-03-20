<?php

class WeaponsController {
    private $db;
    private $weapon;

    public function __construct() {
        require_once '../config/Database.php';
        require_once '../api/models/Weapon.php';

        $this->db = new Database();
        $this->weapon = new Weapon($this->db->getConnection());
    }

    // Handle the incoming request
    public function index() {
        $stmt = $this->weapon->getAll();
        $data = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            $weapon = array(
                "name" => $name,
                "cost" => $cost,
                "weapon_type" => $weapon_type,
                "damage" => $damage,
                "properties" => $properties
            );
            array_push($data, $weapon);
        }

        header('Content-Type: application/json');
        echo json_encode($data);
    }
}

?>
