<?php
namespace app\models;

use app\services\DB;
use app\services\DBI;

abstract class Models
{
    protected $db;
    abstract protected function getTableName();

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function getOne($id)
    {
        $sql = "SELECT * FROM `{$this->getTableName()}` WHERE id = :id";
        $params = [':id' => $id];
        return $this->db->find($sql, $params);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `{$this->getTableName()}`";
        return $this->db->findAll($sql);
    }

    /*
     * $cols = `id`, `review`, `name`, `data`, `picture`
     * $values = NULL, '" . mysqli_real_escape_string($link, strip_tags($_POST['review'])) . "', '" .
            $_SESSION['user']['login'] . "', '" . date('Y-m-d') . "', '" . $id . "'
     */
    public function insert($cols, $vals)
    {
        $sql = "INSERT INTO `{$this->getTableName()}` (:cols) VALUES (:vals)";
        $params = [
            ':cols' => $cols,
            ':vals' => $vals
        ];
        return $this->db->find($sql, $params);
    }

    public function update($id, $col, $value)
    {
        $sql = "UPDATE `{$this->getTableName()}` SET `:col` = `:value` WHERE `{$this->getTableName()}`.`id` = :id";
        $params = [
            ':id' => $id,
            ':col' => $col,
            ':value' => $value
        ];
        return $this->db->find($sql, $params);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `{$this->getTableName()}` WHERE `{$this->getTableName()}`.`id` = :id";
        $params = [':id' => $id];
        return $this->db->find($sql, $params);
    }
}