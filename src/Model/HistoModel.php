<?php
namespace Model;

use \Core\Entity;

class HistoModel extends Entity {

    public function getMovies(){
        $bdd = $this->orm->readByMail();
        $query = "SELECT * FROM movies";
        $stmt = $bdd->prepare($query);
        $stmt-> execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getMoviesById($id){
        $bdd = $this->orm->readByMail();
        $query = "SELECT * FROM movies INNER JOIN histos ON movies.id_movie=histos.id_movie WHERE movies.id_movie = :id ";
        $stmt = $bdd->prepare($query);
        $stmt->bindValue('id', $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}