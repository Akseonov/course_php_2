<?php


namespace app\interfaces;


interface DBI
{
    public function queryOne($sql);
    public function queryAll($sql);
}