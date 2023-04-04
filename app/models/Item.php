<?php 
namespace App\Models;

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
    public function create(array $data)
    {
        
    }

    public function read(int $id)
    {
        $this->id = $id;
        $this->name ='club';
        $this->weight = '200';
        $this->cost = '20';

        return $this;
    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}
