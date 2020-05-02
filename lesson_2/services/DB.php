<?php


namespace app\services;


class DB implements DBI
{
    public function find($sql)
    {
        return $sql . "find";
    }

    public function findAll($sql)
    {
        return $sql . "findAll";
    }
}