<?php
namespace app\models;

class User extends Models
{
    private $user = [];
//    private $id;
//    private $fio;
//    private $login;
//    private $password;
//    private $data;
//    private $admin;

    public function getUser($id)
    {
        return $this->user = $this->getOne($id);
    }

//    public function getUser($id)
//    {
//        $this->user = [
//            'id' => "{$this->setId($id)}",
//            'fio' => "{$this->setFio($id)}",
//            'login' => "{$this->setLogin($id)}",
//            'password' => "{$this->setPass($id)}",
//            'data' => "{$this->setDate($id)}",
//            'admin' => "{$this->setAdmin($id)}"
//        ];
//        return $this->user;
//    }
//
//    private function setId($id)
//    {
//        return $this->id = $this->getOne($id)['id'];
//    }
//
//    private function setFio($id)
//    {
//        return $this->fio = $this->getOne($id)['fio'];
//    }
//
//    private function setLogin($id)
//    {
//        return $this->login = $this->getOne($id)['loggin'];
//    }
//
//    private function setPass($id)
//    {
//        return $this->password = $this->getOne($id)['password'];
//    }
//
//    private function setDate($id)
//    {
//        return $this->data = $this->getOne($id)['date'];
//    }
//
//    private function setAdmin($id)
//    {
//        return $this->admin = $this->getOne($id)['admin'];
//    }


    protected function getTableName()
    {
        return 'users';
    }
}