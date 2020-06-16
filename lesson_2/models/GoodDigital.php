<?php


namespace app\models;


class GoodDigital extends Good
{
    public function totalPrice() {
        $price = $this->getPrice();
        return $price;
    }
}