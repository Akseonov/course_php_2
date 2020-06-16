<?php
namespace app\models;

class Good extends Models
{
    private $good = [];
//    private $id;
//    private $big_name;
//    private $price;
//    private $description;
//    private $name;
//    private $big;
//    private $small;
//    private $views;

//    public function getGood($id)
//    {
//        $this->good = [
//            'id' => "{$this->setId($id)}",
//            'big_name' => "{$this->setBigName($id)}",
//            'price' => "{$this->setPrice($id)}",
//            'description' => "{$this->setDescription($id)}",
//            'name' => "{$this->setName($id)}",
//            'big' => "{$this->setBig($id)}",
//            'small' => "{$this->setSmall($id)}",
//            'views' => "{$this->setViews($id)}",
//        ];
//        return $this->good;
//    }

    public function getGood($id)
    {
        return $this->good = $this->getOne($id);
    }

//    public function setId($id)
//    {
//        return $this->id = $this->getOne($id)['id'];
//    }
//
//    public function setBigName($id)
//    {
//        return $this->big_name = $this->getOne($id)['big_name'];
//    }
//
//    public function setPrice($id)
//    {
//        return $this->price = $this->getOne($id)['price'];
//    }
//
//    public function setDescription($id)
//    {
//        return $this->description = $this->getOne($id)['description'];
//    }
//
//    public function setName($id)
//    {
//        return $this->name = $this->getOne($id)['name'];
//    }
//
//    public function setBig($id)
//    {
//        return $this->big = $this->getOne($id)['big'];
//    }
//
//    public function setSmall($id)
//    {
//        return $this->small = $this->getOne($id)['small'];
//    }
//
//    public function setViews($id)
//    {
//        return $this->views = $this->getOne($id)['vews'];
//    }

    protected function getTableName()
    {
        return 'img';
    }
}