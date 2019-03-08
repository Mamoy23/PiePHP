<?php
namespace Controller;

use \Core\Controller;
use \Model\UserModel;

class UserController extends Controller{

    private $request;
    private $params;
    private $um;

    public function __construct(){
        $this->request = new \Core\Request;
        $this->params = $this->request->getParams();
        $this->um = new \Model\UserModel;
    }
    
    public function indexAction() {
        $this->render('index');
    }
    public function addAction(){
        $this->render('register');

        if(isset($this->params['email']) && !empty($this->params['email'])
        && isset($this->params['password']) && !empty($this->params['password'])){
            $pwd_hash = password_hash($this->params['password'], PASSWORD_DEFAULT);
            $this->um->save($this->params['email'], $pwd_hash);
            $this->render('show', ['email' => $this->params['email']]);
        }
    }
    
    public function loginAction() {
        $this->render('login');

        if(isset($this->params['co_email']) && !empty($this->params['co_email'])
        && isset($this->params['co_password']) && !empty($this->params['co_password'])){
          $user = $this->um->login($this->params['co_email']);
            if(password_verify($this->params['co_password'],$user['password'])){
                $this->render('show', ['email' => $this->params['co_email']]);
                $_SESSION = $user;
                var_dump($_SESSION);
            }
            else{
                $error = "Mauvais mot de passe";
                $this->render('login', ['error' => $error]);
            }
        }
    }

    public function showAction(){
        $user = $this->um->show($id); //VOIR COMMENT RECUPERER l'ID SELON LE CAS
    }

    public function updateAction(){
        //var_dump($_SESSION);
        //$this->render('show', ['email' => $_SESSION['email'] ]);
        //if(isset($this->params['up_email']) && !empty($this->params['up_email'])){
            $this->um->update($_SESSION['id'], $this->params['up_mail'], $this->params['up_password']);
        //}
    }
}