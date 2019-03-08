<?php 

namespace Core;

class Router {

    private static $routes;

    public static function connect ($url, $route) {
        //var_dump($url, $route);
        self::$routes[$url] = $route;
        //var_dump(self::$routes);
    }

    public static function get ($url) {
    // retourne un tableau associatif contenant
    // + le controller a instancier
    // + la méthode du controller a appeler
    // + un tableau contenant les paramètres à passer à la méthode du controller
        if(isset(self::$routes[$url])){
            return self::$routes[$url];
        }
        else{
            $routes = null;
        }
    }
}