<?php


namespace app\services;


interface DBI
{
    public function find($sql);
    public function findAll($sql);
}