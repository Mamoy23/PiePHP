<?php 

namespace Core;

class Database {

    protected $bdd;

    public function __construct() {
        $jsonstr = file_get_contents('config.json');
        $str = json_decode($jsonstr);
        //var_dump($str->dbname);
        try
        {
        $this->bdd = new \PDO('mysql:host='.$str->host.';dbname='.$str->dbname.';charset=utf8', $str->id, $str->password);
        } catch (Exception $e) {
        var_dump($e);
        }
    }
}