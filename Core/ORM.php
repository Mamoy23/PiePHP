<?php 

namespace Core;

class ORM{

    private $bdd;

    public function __construct(){
        try
        {
        $this->bdd = new \PDO('mysql:host=localhost;dbname=PiePHP;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
        var_dump($e);
        }
    }

    public function create ($table, $fields) {
        $query = "INSERT INTO ".$table." (".implode(', ',array_keys($fields)).") VALUES (";
        foreach($fields as $key => $value){
            $bind = ':'.$key;
            if($value == end($fields)){
                $query .= $bind; 
            }
            else{
                $query .= $bind.', ';
            }
        }
        $query.= ')';
        $stmt = $this->bdd->prepare($query);

        foreach($fields as $key => $value){
            $bind = ':'.$key;
            // if(is_string($value)){
            //     $value = "'".$value."'";
            // }
            $stmt->bindValue($bind, $value);
            // if($key == 'password'){
            //     $stmt->bindValue($bind, password_hash($value, PASSWORD_DEFAULT));
            // }
            //echo $bind, $value.PHP_EOL;
        }
        $stmt->execute();
        return $this->bdd->lastInsertId();
    }
    
    public function readByMail () {
        return $this->bdd;
    }

    public function read ($table, $id){
        $query = "SELECT * FROM " .$table. " WHERE id = :id ";
        $stmt = $this->bdd->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function update ($table, $id, $fields) {
        $query = "UPDATE ".$table. " SET ";
        foreach($fields as $key => $value){
            if($value == end($fields)){
                $query.= $key.' = :'.$key;   
            }
            else{
                $query.= $key.' = :'.$key.', ';
            }
        }
        $query .= " WHERE id = :id";
        $stmt = $this->bdd->prepare($query);
        foreach($fields as $key => $value){
            $stmt->bindValue($key, $value);
        }
        $stmt->bindValue('id', $id);
        return $stmt->execute();
    }

    public function delete ($table, $id) {
        $query = "DELETE FROM " .$table. " WHERE id = :id";
        $stmt = $this->bdd->prepare($query);
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }

    public function find ($table, $params = array(
    'WHERE' => '',
    'ORDER BY' => '',
    'LIMIT' => ''
    )) {
        $query = "SELECT * FROM " .$table. " ";
        if(isset($params)){
            foreach($params as $key => $value){
                if(!empty($value)){
                    $query .= $key. ' ' .$value. ' ';
                }
            }
        }
        //var_dump($query);
        $stmt = $this->bdd->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}