<?php
namespace Controller;

use \Core\Controller;
use \Model\UserModel;

class UserController extends Controller{

    //private $id;

    public function indexAction() {
        $this->render('index');
    }
    public function addAction(){
        $this->render('register');
        if(isset($_POST['email']) && !empty($_POST['email'])
        && isset($_POST['password']) && !empty($_POST['password'])){
            $app = new \Model\UserModel;
            $id = $app->save($_POST['email'], $_POST['password']);
            $this->render('show');
        }
    }
    
    public function loginAction() {
        $this->render('login');
        if(isset($_POST['co_email']) && !empty($_POST['co_email'])
        && isset($_POST['co_password']) && !empty($_POST['co_password'])){
            $app = new \Model\UserModel;
            $result = $app->login($_POST['co_email'], $_POST['co_password']);
            echo 'co ok';
            $this->render('show');
        }
    }
}