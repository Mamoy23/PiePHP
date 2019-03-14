<?php

namespace Core;

class Request{

    public function getParams(){
        $request = array_merge($_GET, $_POST);
                  
        foreach ($request as &$value){
            $value = trim($value);
            $value = str_replace('\\', '', $value);
            $value = strip_tags($value);
            $value = htmlspecialchars($value);
        }
        return $request;
    }
}