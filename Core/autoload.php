<?php

// function my_autoloader($class){
//     require($class.'.php');
// }
// spl_autoload_register('my_autoloader');

spl_autoload_register(function($className){
    $file = $className.'.php';
    require_once str_replace('\\', '/', $file);
});