<?php

include $_SERVER['DOCUMENT_ROOT'] . '/../services/Autoloader.php';
//include $_SERVER['DOCUMENT_ROOT'] . '/../models/Good.php';
//include $_SERVER['DOCUMENT_ROOT'] . '/../services/DB.php';
//use \services\DB;
spl_autoload_register([new \app\services\Autoloader(), 'loadClass']);



$db = new \app\services\DB();
$user = new \app\models\User($db);
echo $user->getAll();
echo "<br>";
echo $user->getOne(12);

