<?php

// function my_autoloader($class){
//     require($class.'.php');
// }
// spl_autoload_register('my_autoloader');

spl_autoload_register(function($className){
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $className.'.php');
    if(file_exists($file)){
        require_once $file;
        //echo substr($className, 0, 5);
    }
    if(dirname($file) == 'src')
    echo'hamdoulila';


});