<?php
namespace Controller;

use \Core\Controller;
use \Model\HistoModel;

class HistoController extends Controller{

    private $hm;

    public function __construct() {
        parent::__construct();
        $this->hm = new \Model\HistoModel($this->params);
    }

    public function showAction() {
        $results = $this->hm->read();
        $movies = [];
        foreach($results as $key => $result){
            $movie = $this->hm->getMoviesById($result['id_movie']);
            array_push($movies, $movie);
        }
        $this->render('list', ['results' => $movies]);
    }

    public function addAction() {
        if(isset($this->hm->id_movie) && !empty($this->hm->id_movie)){
            $this->hm->create();
            $this->showAction();
            return false;
        }
        $movies = $this->hm->getMovies();
        $this->render('create', ['movies' => $movies]);
    }

    public function deleteAction(){
        if(isset($this->hm->id_movie) && !empty($this->hm->id_movie)){
            $this->hm->delete($this->hm->id_movie,'id_movie');
            $this->showAction();
        }
    }
}