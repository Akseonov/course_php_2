<?php


namespace app\models;


class OrderItem extends Models
{
    private $orderItems = [];

    public function getOrderItem($id)
    {
        return $this->orderItems = $this->getOne($id);
    }

    protected function getTableName()
    {
        return 'order_items';
    }
}