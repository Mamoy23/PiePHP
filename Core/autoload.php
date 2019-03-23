<?php

spl_autoload_register(function($className){
        $file = str_replace('\\', DIRECTORY_SEPARATOR, $className.'.php');
        if(file_exists($file)){
            require_once $file;
        }
        elseif(file_exists('src/'.$file)){
            require_once 'src/'.$file;
        }
});