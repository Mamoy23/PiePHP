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

// spl_autoload_register(function($className){
//     $file = str_replace('\\', DIRECTORY_SEPARATOR, $className.'.php');
//     //var_dump($className);
//     if(file_exists($file)){
//         require_once $file;
//     }
//     elseif(dirname($file) == 'Controller' || dirname($file) == 'Model'){
//         //if(class_exists($className)){
//             $file2 = 'src/'.$file;
//             if(file_exists($file2)){
//             require_once $file2;
//         }
//         // else{
//         //     echo 'autoload class existe pas';
//         // }
//     }
// });