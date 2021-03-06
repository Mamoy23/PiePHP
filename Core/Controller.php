<?php

namespace Core;

//use \Core;

class Controller{
    protected static $_render;
    protected $request;
    protected $params;

    public function __construct(){
        $this->request = new Request;
        $this->params = $this->request->getParams();
    }

    protected function render($view, $scope = []) {
        extract($scope);
        $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View',
        str_replace('Controller\\', '', basename(get_class($this))), $view]) . '.php';
        $f = str_replace('Controller', '', $f);
        
        if (file_exists($f)) {
            ob_start();
            $obj = new TemplateEngine();
            $obj->parse($f);
            include('tmp.php');  
            $view = ob_get_clean();
            ob_start();        
            include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View',
            'index']) . '.php');
            self::$_render = ob_get_clean();
        }
    }

    public function __destruct(){
        echo self::$_render;
    }
}