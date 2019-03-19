<?php
namespace Controller;

use \Core\Controller;
use \Model\UserModel;

class UserController extends Controller{

    // protected $request;
    // protected $params;
    private $um;

    public function __construct(){
        // $this->request = new \Core\Request;
        // $this->params = $this->request->getParams();
        //$this->id = $_SESSION['id'];
        parent::__construct();
        $this->um = new \Model\UserModel($this->params);
        if(!empty($_SESSION)){
            $this->id = $_SESSION['id_user'];
        }
    }
    
    public function indexAction() {
        $this->render('index');
    }

    // public function vueAction(){
    //     $this->render('register');
    // }
    public function addAction(){
        
        //if(isset($this->um->check)){
            if(isset($this->um->email) && !empty($this->um->email)
            && isset($this->um->password) && !empty($this->um->password)){
                //$pwd_hash = password_hash($this->um->password, PASSWORD_DEFAULT);
                //$this->um = new \Model\UserModel($this->params);
                $this->um->create();
                $this->render('login');
                return false;
            }
            else{
                $error = "Merci de remplir tous les champs";
                $this->render('register', ['error' => $error]);
                return false;
            }
        //}
        $this->render('register');
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
        //$this->um = new \Model\UserModel($this->params);
        $user = $this->um->read(); //VOIR COMMENT RECUPERER l'ID SELON LE CAS
    }

    public function updateAction() {
        //var_dump($_SESSION);
        //$this->render('show', ['email' => $_SESSION['email'] ]);
        if(isset($this->um->email) && !empty($this->um->email)){
            $this->um->update($this->id, 'id_user');
            $user = $this->um->read();
            //var_dump($user[0]['email']);
            $this->render('show', ['email' => $user[0]['email']]);
        }
        $user = $this->um->read();
        $this->render('show', ['email' => $user[0]['email']]);
            //$this->um->update($_SESSION['id'], $this->params['up_mail'], $this->params['up_password']);
        //}
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