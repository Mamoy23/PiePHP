<?php

namespace Core;

class Entity {

    public $orm;

    public function __construct($params) {
        $this->orm = new ORM;
        $this->params = $params;
        $this->id = $_SESSION['id'];
        //var_dump($_SESSION['id']);
        foreach($params as $key => $value){
            $this->$key = $value;
            //echo $this->$key;
        }
    }

    public function create() {
        $this->orm->create($this->table, $this->params);
        //var_dump($this->params);
    }

    public function read(){
        $this->orm->read($this->table, $this->id);
    }

    public function update(){
        $this->orm->update($this->table, $this->id, $this->params);
    }

    public function delete(){
        $this->orm->delete($this->table, $this->id);
    }

    public function find(){
        $this->orm->find($this->table, $this->params);
    }
}