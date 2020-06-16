<?php


namespace app\models;


class Order extends Models
{
    private $order = [];

    public function getOrder($id)
    {
        return $this->order = $this->getOne($id);
    }

    protected function getTableName()
    {
        return 'orders';
    }
}