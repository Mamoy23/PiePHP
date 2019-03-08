<?php
namespace Core;

class Core {
    public function run() {
    //echo __CLASS__ . " [OK]" . PHP_EOL;
    
    // ROUTAGE DYNAMIQUE
        // $exp = explode('/', $_SERVER['REQUEST_URI']);
        // if (empty($exp[2])) {
        //     $app = new \Controller\AppController();
        //     $app->indexAction();
        // }
        // elseif (!empty($exp[2])) {
        //     $className = 'Controller\\'.ucfirst($exp[2]).'Controller';
        //     if (class_exists($className)) {
        //         $app = new $className();
        //         if (!empty($exp[3])) {
        //             $methodName = $exp[3].'Action';
        //             if (method_exists($className, $methodName)) {
        //                 $app->$methodName();
        //             }
        //             else {
        //                 require_once('src/View/Error/404.php');
        //             }
        //         }
        //         else {
        //             $app->indexAction();
        //         }
        //     }
        //     else {
        //         require_once('src/View/Error/404.php');
        //     }
        // }
    
        //ROUTAGE STATIQUE
        require_once 'routes.php';

        $url = substr($_SERVER['REQUEST_URI'], 11);
        $routes = Router::get($url);
        //var_dump($routes[$url]);
        if($routes != null){
            $className = 'Controller\\'.ucfirst($routes['controller']).'Controller';
            $methodName = $routes['action'].'Action';
            if(class_exists($className)){
                $app = new $className();
                if(method_exists($className, $methodName)){
                    $app->$methodName();
                }
                else{
                    echo 'La methode '.$methodName.' n\'existe pas';
                }
            }
            else{
                echo ' La classe '.$className.' n\'existe pas';
            }
        }
        else{
            require_once 'src/View/Error/404.php';
        }

    }
}