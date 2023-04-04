<?php

// Autoloader
require_once '../vendor/autoload.php';

// Load Config
require_once '../config/config.php';

// Routes
require_once '../routes/web.php';
require_once '../app/Router.php';

/*
//require_once '../config/Database.php';
//require_once '../api/models/Weapon.php';
//require_once '../app/controllers/Weapon.php';
use app\Controllers\WeaponsController;

// Create a new instance of the controller
$weaponsController = new WeaponsController();
$request = explode('.',$_SERVER['SERVER_NAME'])[0];
// Call the index method to handle the request
if ($request === "api") {
    $weaponsController->index();
} else {
    $weaponsController->view();
}
*/
?>
