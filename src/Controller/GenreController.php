<?php
namespace Controller;

use \Core\Controller;
use \Model\GenreModel;

class GenreController extends Controller{

    // protected $request;
    // protected $params;
    private $gm;

    public function __construct(){
        // $this->request = new \Core\Request;
        // $this->params = $this->request->getParams();
        //$this->id = $_SESSION['id'];
        parent::__construct();
        $this->gm = new \Model\GenreModel($this->params);
    }

    public function indexAction(){
        $results = $this->gm->find();
        $this->render('index', ['results' => $results]);
    }

    public function showAction(){
        $list = $this->gm->read();
        $this->render('list', ['results' => $list]);
    }

    public function addAction(){
        $this->render('create');
        var_dump($this->gm->name);
        if(isset($this->gm->name) && !empty($this->gm->name)){
            $this->gm->create();
        }
    }
}