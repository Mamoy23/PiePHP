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
    }
    
    public function indexAction() {
        $this->render('index');
    }

    // public function vueAction(){
    //     $this->render('register');
    // }
    public function addAction(){
        $this->render('register');

        if(isset($this->um->email) && !empty($this->um->email)
        && isset($this->um->password) && !empty($this->um->password)){
            //$pwd_hash = password_hash($this->um->password, PASSWORD_DEFAULT);
            //$this->um = new \Model\UserModel($this->params);
            $this->um->create();
            $this->render('login');
        }
        // else{
        //     $error = "Remplit les champs";
        //     $this->render('register', ['error' => $error]);
        // }09Dramatique128

    }
    
    public function loginAction() {
        $this->render('login');

        if(isset($this->um->co_email) && !empty($this->um->co_email)
        && isset($this->um->co_password) && !empty($this->um->co_password)){
            
          $user = $this->um->login($this->um->co_email);
          //var_dump($user['password']);
            if(password_verify($this->um->co_password, $user['password'])){
                $_SESSION = $user;
                $this->render('show', ['email' => $user['email']]);
                //var_dump($_SESSION);
            }
            else{
                $error = "Mauvais mot de passe";
                $this->render('login', ['error' => $error]);
            }
        }
    }

    public function showAction() {
        //$this->um = new \Model\UserModel($this->params);
        $user = $this->um->read(); //VOIR COMMENT RECUPERER l'ID SELON LE CAS
    }

    public function updateAction() {
        //var_dump($_SESSION);
        //$this->render('show', ['email' => $_SESSION['email'] ]);
        if(isset($this->um->email) && !empty($this->um->email))
            //$this->um->update($_SESSION['id'], $this->params['up_mail'], $this->params['up_password']);
        //}
        $this->um->update();
        $this->render('show', ['email' => $_SESSION['email'], 'pwd' => $_SESSION['password']]);
    }

    public function deleteAction() {
        $this->um->delete();
        $this->render('register');
    }

    public function findAction() {
        $this->um->find();
    }

    public function logoutAction(){
        session_destroy();
        $this->render('login', ['session' => $_SESSION = null]);
    }
}