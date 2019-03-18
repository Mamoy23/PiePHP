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
        if(isset($this->mm->name) && !empty($this->mm->name)
        && isset($this->mm->genre) && !empty($this->mm->genre)
        && isset($this->mm->date) && !empty($this->mm->date)
        && isset($this->mm->id_user) && !empty($this->mm->id_user)){
            $this->mm->create();
            $this->showAction();
            return false;
            //$this->render('index');
        }
        $genres = $this->mm->getGenres();
        $this->render('create', ['genres' => $genres]);
    }

    public function showAction(){
        $list = $this->mm->read();
        $this->render('list', ['results' => $list]);
    }

    public function updateAction(){
        $this->render('update');
    }

    public function deleteAction(){
        //var_dump($this->mm->id_movie);
        if(isset($this->mm->id_movie) && !empty($this->mm->id_movie)){
            $this->mm->delete($this->mm->id_movie,'id_movie');
            $this->showAction();
        }
    }

}