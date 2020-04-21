<?php

class Good
{
    public $id;
    public $name;
    public $price;
    public $description;

    /**
     * Good constructor.
     * @param $name
     * @param $price
     * @param $description
     * @param int $id
     */
    public function __construct($name, $price, $description, $id = 0)
    {
        $this->id = $id;
        $this->price = $price;
        $this->description = $description;
        $this->name = $name;
    }

    /**
     * Выводит товар каталога
     */
    public function renderGood()
    {
        echo $this->getName() . $this->getPrice() . $this->getDescription() . "<hr>";
    }

    /**
     * Возвращает описание товара
     * @return string опиание товара
     */
    public function getDescription(): string
    {
        return <<<php
            $this->description<br>
php;
    }

    /**
     * Возвращает цену товара
     * @return string цена товара
     */
    public function getPrice(): string
    {
        return <<<php
            $this->price<br>
php;
    }

    /**
     * Возвращает имя товара
     * @return string имя товара
     */
    public function getName(): string
    {
        return <<<php
            $this->name<br>
php;
    }
}

class Sale extends Good
{
    public $sale;

    public function __construct($name, $price, $description, $sale, $id = 0)
    {
        $this->sale = $sale;
        parent::__construct($name, $price, $description, $id);
    }

    /**
     * @return string переопределяет цена товара с учетом скидки
     */
    public function getPrice(): string
    {
        $this->price = $this->price * ($this->sale/100);
        return <<<php
            $this->price  Скидка!!!<br>
php;
    }
}

$goodSale = new Sale('Пизанская башня', 150000, 'Картина с пизанской башней', 10, 11);
$goodSale->renderGood();

$good = new Good('Великая китайская стена', 250000, 'Картина с великой китайской стеной', 1);
$good->renderGood();
