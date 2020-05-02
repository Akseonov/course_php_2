<?php
namespace app\services;

class Autoloader
{
    public function loadClass($classname)
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . '/../' . str_replace(['\\', 'app/'],['/', ''],$classname) . ".php";

        if (file_exists($file)) {
            include $file;
        }
    }
}