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

    private function getData(){
        $stmt = $this->weapon->getAll();
        $data = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            $weapon = array(
                "name" => $name,
                "cost" => $cost,
                "weapon_type" => $weapon_type,
                "damage" => $damage,
                "damage_type" => $damage_type,
                "properties" => $properties
            );
            array_push($data, $weapon);
        }
        return $data;
    }

    // Handle the incoming request
    public function index() {
        $data = $this->getData();

        header('Content-Type: application/json');
        echo json_encode($data);
    }
    public function view() {
        $data = $this->getData();

        //echo var_dump($data);
        $_POST['weapons'] = $data;
        require_once '../api/views/weapon.php';
    }
}

?>
