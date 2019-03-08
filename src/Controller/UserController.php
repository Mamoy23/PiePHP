<?php
namespace Controller;

use \Core\Controller;
use \Model\UserModel;

class UserController extends Controller{

    public function __construct(){
        $this->request = new \Core\Request;
    }
    
    public function indexAction() {
        $this->render('index');
    }
    public function addAction(){
        $this->render('register');
        $request = $this->request->getParams();
        if(isset($request['email']) && !empty($request['email'])
        && isset($request['password']) && !empty($request['password'])){
            $app = new \Model\UserModel;
            $app->save();
            $this->render('show');
        }
    }
    
    public function loginAction() {
        $this->render('login');
        $request = $this->request->getParams();
        if(isset($request['co_email']) && !empty($request['co_email'])
        && isset($request['co_password']) && !empty($request['co_password'])){
            $app = new \Model\UserModel;
            $result = $app->login($request['co_email'], $request['co_password']);
            echo 'co ok';
            $this->render('show');
        }
    }
}