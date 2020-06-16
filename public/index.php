<?php

use app\models\Good;
use app\models\User;

include $_SERVER['DOCUMENT_ROOT'] . '/../config/config.php';
include DIR . '/../services/Autoloader.php';

spl_autoload_register([new \app\services\Autoloader(), 'loadClass']);

$user = new User();
var_dump($user->getAll());
var_dump($user->getOne(1));
var_dump($user->getUser(1));

$good = new Good();
var_dump($good->getAll());
var_dump($good->getOne(1));
var_dump($good->getGood(1));

$review = new \app\models\Review();
var_dump($review->getAll());
var_dump($review->getOne(3));
var_dump($review->getReview(3));

$order = new \app\models\Order();
var_dump($order->getAll());
var_dump($order->getOne(1));
var_dump($order->getOrder(1));

$orderItems = new \app\models\OrderItem();
var_dump($orderItems->getAll());
var_dump($orderItems->getOne(1));
var_dump($orderItems->getOrderItem(1));