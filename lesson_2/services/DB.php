<?php


namespace app\services;

use app\interfaces\DBI;

class DB implements DBI
{
    public function queryOne($sql)
    {
        return $sql . "queryOne";
    }

    public function queryAll($sql)
    {
        return $sql . "queryAll";
    }
}