<?php
namespace Controller;

use \Core\Controller;
use \Model\GenreModel;

class GenreController extends Controller{

    private $gm;

    public function __construct() {
        parent::__construct();
        $this->gm = new \Model\GenreModel($this->params);
    }

    public function indexAction() {
        $results = $this->gm->findAll();
        $this->render('index', ['results' => $results]);
    }

    public function showAction() {
        $list = $this->gm->read();
        $this->render('list', ['results' => $list]);
    }

    public function addAction() {
        if(isset($this->gm->name) && !empty($this->gm->name)){
            $this->gm->create();
            $this->showAction();
            return false;
        }
        $this->render('create');
    }

    public function updateAction() {
        if(isset($this->gm->id_genre)){
            $_SESSION['id_genre'] = $this->gm->id_genre;
        }
        if(isset($this->gm->name) && !empty($this->gm->name)) {
            $this->gm->update($_SESSION['id_genre'], 'id_genre');
            $this->showAction();
            return false;
        }
        $result = $this->gm->find(['WHERE' => 'id_genre = '.$_SESSION['id_genre']]);
        $this->render('update', ['results' => $result]);
    }

    public function deleteAction() {
        if(isset($this->gm->id_genre) && !empty($this->gm->id_genre)){
            $this->gm->delete($this->gm->id_genre,'id_genre');
            $this->showAction();
        }
    }
}