<?php

namespace Controller;

use \Core\Controller;
use \Model\MovieModel;

class MovieController extends Controller {

    private $mm;

    public function __construct(){
        parent::__construct();
        $this->mm = new \Model\MovieModel($this->params);
    }

    public function indexAction(){
        $result = $this->mm->find();
        $this->render('index', ['results' => $result]);
    }

    public function addAction(){
        if(isset($_POST['name']) && !empty($_POST['name'])
        && isset($_POST['genre']) && !empty($_POST['genre'])
        && isset($_POST['date']) && !empty($_POST['date'])
        && isset($_POST['id_user']) && !empty($_POST['id_user'])){
            $this->mm->create();
            $result = $this->mm->read();
            $this->render('list', ['results' => $result]);
            return false;
            //$this->render('index');
        }
        $genres = $this->mm->getGenres();
        $this->render('create', ['genres' => $genres]);
    }

    public function showAction(){
        $list = $this->mm->read();
        $this->render('list', ['results' => $list]);
        //var_dump($list);
    }

    public function updateAction(){
        
    }

    public function deleteAction(){
        if(isset($_POST['id_film']) && !empty($_POST['id_film'])){
            $this->mm->delete();
        }
    }

}