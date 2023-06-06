<?php 
namespace App\Models;

//use App\Models\Database;

class Item
{
    protected $id;
    protected $name;
    protected $weight;
    protected $cost;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getCost()
    {
        return $this->cost;
    }

    // SET METHODS
    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setWeight(string $weight)
    {
        $this->weight = $weight;
    }

    public function setCost(string $cost)
    {
        $this->cost = $cost;
    }

    // CRUD OPERATIONS
    public static function create(array $data)
    {
        
    }

    public static function readAll()
    {
        $db = new Database();
        $conn = $db->getConnection();


    }

    public static function read(int $id)
    {
        $db = new Database();
        $stmt = $db->runQuery('select * from vs_items where id=' . $id);
        //var_dump($stmt);
        $data = $stmt->fetch();
        //var_dump($data);
        $item = new Item();
        $item->setId($data['id']);
        $item->setName($data['name']);
        $item->setWeight($data['weight']);
        $item->setCost($data['cost']);

        return $item;
    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}
