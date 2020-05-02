<?php
namespace app\models;

use app\services\DBI;

abstract class Models
{
    protected $db;
//    protected $tableName;
    abstract protected function getTableName();

    public function __construct(DBI $db)
    {
        $this->db = $db;
    }

    public function getOne($id)
    {
        $sql = "SELECT * FROM `{$this->getTableName()}` WHERE id = {$id}";
        return $this->db->find($sql);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `{$this->getTableName()}`";
        return $this->db->findAll($sql);
    }
}