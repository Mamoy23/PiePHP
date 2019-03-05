<?php

namespace Model;

class UserModel{
    private $bdd;
    private $email;
    private $password;
    //private $id;

    public function __construct(){
        try
        {
        $this->bdd = new \PDO('mysql:host=localhost;dbname=PiePHP;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
        var_dump($e);
        }
    }

    public function save($email, $password) {
        $query = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $this->bdd->prepare($query);
        $stmt->bindValue('email', $email);
        $stmt->bindValue('password', $password);
        $stmt->execute();
        return $id = $this->bdd->lastInsertId();
    }

    public function login($email, $password){
        $query = "SELECT * FROM users WHERE :email = email ";
        $stmt = $this->bdd->prepare($query);
        $stmt->bindValue('email', $email);
        $stmt->execute();
        return $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}