<?php

namespace Model;
use \Core\Entity;

class UserModel extends Entity{

    // private $email;
    // private $password;
    //private $orm;
    //protected $id = $_SESSION['id_user'];
    //protected $table = 'users';

    // public function __construct(){
    //     //$this->table = 'users';
    //     //$this->orm = new \Core\ORM;
    //     parent::__construct();
    //     if(!empty($_SESSION)){
    //         $this->id = $_SESSION['id_user'];
    //     }
    // }

    // public function save($email, $password) {
    //     $this->orm->create($this->table, array(
    //         'email' => $email,
    //         'password' => $password)
    //         );
    // }

    public function login($email){
        $bdd = $this->orm->readByMail();
        $query = "SELECT * FROM users WHERE email = :email ";
        $stmt = $bdd->prepare($query);
        $stmt->bindValue('email', $email);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    // public function show($id){
    //     return $this->orm->read($this->table, $id);
    // }

    // public function update($id, $email, $password){
    //     $this->orm->update($this->table, $id, array(
    //         'email' => $email,
    //         )
    //     );
    // }
}