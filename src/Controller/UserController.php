<?php
namespace Controller;

use Core\Controller;

class UserController extends Controller{
    public function indexAction(){
        echo 'User controller IndexAction';
    }
    public function addAction(){
        echo "add" ;
    }

    public function editAction(){
        echo 'edit';
    }

    public function deleteAction(){
        echo 'delete';
    }
}