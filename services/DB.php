<?php


namespace app\services;


use app\traits\Singleton;

class DB implements DBI
{

    use Singleton;

    protected $config = [
        'driver' => 'mysql',
        'host' => '127.0.0.1:3306',
        'dbname' => 'lesson_6',
        'charset' => 'UTF8',
        'username' => 'root',
        'password' => '',
    ];

    protected $connection;

    protected function getConnection()
    {
        if (!empty($this->connection)) {
            return $this->connection;
        }

        $this->connection = new \PDO(
            $this->getSdnString(),
            $this->config['username'],
            $this->config['password']
        );

        $this->connection->setAttribute(
            \PDO::ATTR_DEFAULT_FETCH_MODE,
            \PDO::FETCH_ASSOC
        );

        return $this->connection;
    }

    protected function getSdnString()
    {
        return sprintf(
            '%s:host=%s;dbname=%s;charset=%s;',
            $this->config['driver'],
            $this->config['host'],
            $this->config['dbname'],
            $this->config['charset']
        );
    }

    protected function query(string $sql, array $params= [])
    {
        $PDOStatement = $this->getConnection()->prepare($sql);
        $PDOStatement->execute($params);
        return $PDOStatement;
    }

    public function find($sql, array $params = [])
    {
        return $this->query($sql, $params)->fetch();
    }

    public function findAll($sql, array $params = [])
    {
        return $this->query($sql, $params)->fetchAll();
    }
}