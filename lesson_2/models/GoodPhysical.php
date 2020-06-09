<?php


namespace app\models;


class GoodPhysical extends Good
{
    public $count;

    public function totalPrice() {
        $price = $this->getPrice();
        $price *= $this->count;
        return $price;
    }
}