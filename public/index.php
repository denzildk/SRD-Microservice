<?php

//require_once '../config/Database.php';
//require_once '../api/models/Weapon.php';
require_once '../api/controllers/Weapon.php';

// Create a new instance of the controller
$weaponsController = new WeaponsController();

// Call the index method to handle the request
$weaponsController->index();

?>
