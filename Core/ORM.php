<?php 

namespace Core;

class ORM{

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
            if($key == 'password'){
                $stmt->bindValue($bind, password_hash($value, PASSWORD_DEFAULT));
            }
            echo $bind, $value.PHP_EOL;
        }
            //var_dump("'".$bind."'", $value);
            // $stmt->bindValue('email', $email);
            // $stmt->bindValue('password', $password);
        $stmt->execute();
        return $id = $this->bdd->lastInsertId();
    }
    
    public function read ($table, $id) {}
    public function update ($table, $id, $fields) {}
    public function delete ($table, $id) {}
    public function find ($table, $params = array(
    'WHERE' => '1',
    'ORDER BY' => 'id ASC',
    'LIMIT' => ''
    )) {}
}