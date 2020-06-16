<?php


namespace app\models;


class GoodWeight extends Good
{
    public $weight;

    public function totalPrice() {
        $price = $this->getPrice();
        $price *= $this->weight;
        return $price;
    }
}