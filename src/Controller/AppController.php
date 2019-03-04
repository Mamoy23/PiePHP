<?php 

namespace Controller;

use Core\Controller;

class AppController extends Controller{

    public function indexAction(){
        echo 'AppController indexAction';
    }

    public function testAction(){
        echo 'AppController testAction';
    }
}
