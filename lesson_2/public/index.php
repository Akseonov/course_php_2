<?php

require $_SERVER['DOCUMENT_ROOT'] . '/../services/Autoloader.php';

spl_autoload_register([new \app\services\Autoloader(), 'loadClass']);

use app\models\User;


$user = new User();
echo $user->getAll();
echo "<br>";
echo $user->getOne(12);

