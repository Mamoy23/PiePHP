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
            // $oldcontent = file_get_contents($f);
            $obj = new TemplateEngine();
            $obj->parse($f);
            //echo $newcontent;
            //file_put_contents($f, $newcontent);
            //echo $oldcontent;
            //file_put_contents($f, $oldcontent);
            //file_put_contents('tmp.php', $content);
            include('tmp.php'); 
            //include($f);   
            $view = ob_get_clean();
            ob_start();        
            include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View',
            'index']) . '.php');
            self::$_render = ob_get_clean();
        }
    }

    public function __destruct(){
        echo self::$_render;
        // $obj = new TemplateEngine();
        // $content = $obj->a();
        //echo $content;
    }
}