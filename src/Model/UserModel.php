<?php

namespace Model;
use \Core\Entity;

class UserModel extends Entity {

    public function login($email){
        $bdd = $this->orm->readByMail();
        $query = "SELECT * FROM users WHERE email = :email ";
        $stmt = $bdd->prepare($query);
        $stmt->bindValue('email', $email);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}