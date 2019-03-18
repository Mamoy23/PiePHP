<?php

namespace Model;

use \Core\Entity;

class MovieModel extends Entity {
    //protected $table = 'movies';
    // public function __construct(){
    //     $this->id = $this->mm->id_film;
    // }

    public function getGenres(){
        $bdd = $this->orm->readByMail();
        $query = "SELECT DISTINCT name FROM genres";
        $stmt = $bdd->prepare($query);
        $stmt-> execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}