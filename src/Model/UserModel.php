<?php

namespace Model;

class UserModel{
    private $bdd;
    private $email;
    private $password;
    private $table;
    //private $id;

    public function __construct(){
        try
        {
        $this->bdd = new \PDO('mysql:host=localhost;dbname=PiePHP;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
        var_dump($e);
        }
        $this->request = new \Core\Request;
        $this->table = 'users';

    }

    public function save() {
        $request = $this->request->getParams();
        $app = new \Core\ORM;
        $app->create($this->table, array(
            'email' => $request['email'],
            'password' => $request['password'])
            );
    }

    public function login($email, $password){
        $query = "SELECT * FROM users WHERE :email = email ";
        $stmt = $this->bdd->prepare($query);
        $stmt->bindValue('email', $email);
        $stmt->execute();
        return $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}