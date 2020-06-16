<?php
namespace app\services;

class Autoloader
{
    public function loadClass($classname)
    {
        $file = str_replace('app\\','',$classname);
        $file = $_SERVER['DOCUMENT_ROOT'] . '/../' . $file . ".php";
        $file = realpath($file);
        if (file_exists($file)) {
            include $file;
        }
    }
}