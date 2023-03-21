<?php

//require_once '../config/Database.php';
//require_once '../api/models/Weapon.php';
require_once '../api/controllers/Weapon.php';

// Create a new instance of the controller
$weaponsController = new WeaponsController();
$request = explode('.',$_SERVER['SERVER_NAME'])[0];
// Call the index method to handle the request
if ($request === "api") {
    $weaponsController->index();
} else {
    $weaponsController->view();
}

?>
