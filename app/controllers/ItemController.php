<?php 

namespace App\Controllers;

use App\Models\Item;
use Symfony\Component\Routing\RouteCollection;

class ItemController
{
    // Show the product attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        //var_dump($routes);
        $item = item::read($id);
        $item->read($id);

        require_once APP_ROOT . '\\app\\views\\Item.php';
	}

}
