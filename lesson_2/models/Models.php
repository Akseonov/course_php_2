<?php
namespace app\models;

use app\services\DB;

abstract class Models
{
    protected $db;
    protected $tableName;
    
    public function __construct()
    {
        $this->db = new DB();
        $this->tableName = $this->getTableName();
    }

    public function getOne($id)
    {
        $sql = "SELECT * FROM `{$this->tableName}` WHERE id = {$id}";
        return $this->db->queryOne($sql);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `{$this->tableName}`";
        return $this->db->queryAll($sql);
    }

    abstract protected function getTableName();
}