<?php
namespace Controller;

use \Core\Controller;
use \Model\UserModel;

class UserController extends Controller{

    private $um;

    public function __construct() {
        parent::__construct();
        $this->um = new \Model\UserModel($this->params);
        if(!empty($_SESSION)){
            $this->id = $_SESSION['id_user'];
        }
    }
    
    public function indexAction() {
        $this->render('index');
    }

    public function vueAction(){
        $this->render('register');
    }

    public function addAction() {
        if(isset($this->um->email) && !empty($this->um->email)
        && isset($this->um->password) && !empty($this->um->password)){
            $this->um->create();
            $this->render('login');
            return false;
        }
        else{
            $error = "Merci de remplir tous les champs";
            $this->render('register', ['error' => $error]);
            return false;
        }
    }
    
    public function loginAction() {
        if(isset($this->um->co_email) && !empty($this->um->co_email)
        && isset($this->um->co_password) && !empty($this->um->co_password)){
            
            $user = $this->um->login($this->um->co_email);
            //var_dump($user['password']);
            if(password_verify($this->um->co_password, $user['password'])){
                $_SESSION = $user;
                $this->render('show', ['email' => $user['email']]);
                return false;
            }
            else{
                $error = "Mauvais mot de passe";
                $this->render('login', ['error' => $error]);
                return false;
            }
        }
        $this->render('login');
    }

    public function showAction() {
        $user = $this->um->read(); 
    }

    public function updateAction() {
        if(isset($this->um->email) && !empty($this->um->email)){
            $this->um->update($this->id, 'id_user');
            $user = $this->um->read();
            $this->render('show', ['email' => $user[0]['email']]);
        }
        $user = $this->um->read();
        $this->render('show', ['email' => $user[0]['email']]);
    }

    public function deleteAction() {
        $this->um->delete($this->id, 'id_user');
        session_destroy();
        $this->render('register', ['session' => $_SESSION = null]);
    }

    public function findAction() {
        $this->um->find();
    }

    public function logoutAction(){
        session_destroy();
        $this->render('login', ['session' => $_SESSION = null]);
    }
}