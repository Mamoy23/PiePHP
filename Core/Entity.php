<?php

namespace Core;

class Entity {

    public $orm;
    protected $table = null;
    protected $id_name;
    protected $id;
    // public $bdd = new Database()->DB();

    public function __construct($params) {
        $this->orm = new ORM();
        $this->params = $params;
        foreach($params as $key => $value){
            $this->$key = $value;
            //echo $this->$key;
        }
        if(!empty($_SESSION)){
            $this->id = $_SESSION['id_user'];
        }
        // if(empty($id_name)){
        //     $this->id_name ='id_'.strtolower(str_replace('\\', '', str_replace('Model', '', (get_class($this)))));
        //     //var_dump($this->id_name);
        // }
        if(empty($table)){
            $this->table = strtolower(str_replace('\\', '', str_replace('Model', '', (get_class($this))))).'s';
            //var_dump($this->table);
        }
    }

    public function create() {
        return $this->orm->create($this->table, $this->params);
        //var_dump($this->params);
    }

    public function read(){
        return $this->orm->read($this->table, $this->id);
    }

    public function update($id, $id_name){
        //var_dump($id, $id_name);
        return $this->orm->update($this->table, $id, $this->params, $id_name);
    }

    public function delete($id, $id_name){
        //var_dump($id, $id_name);
        return $this->orm->delete($this->table, $id, $id_name);
    }

    public function find($params){
        return $this->orm->find($this->table, $params);
    }

    public function findAll(){
        return $this->orm->find($this->table, $this->params);
    }
}