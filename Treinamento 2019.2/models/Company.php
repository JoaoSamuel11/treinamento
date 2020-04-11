<?php

class Company{

    private $id;
    private $name;
    private $federation;

    public static function create($name, $federation){
        $conection = Connection::getConnection();
        $query = "insert into companys(name,federation) values ('{$name}' , '{$federation}')";
        $result = mysqli_query($conection , $query);
        mysqli_close($conection);
    }

    public static function all(){
        $conection = Connection::getConnection();
        $name = array();
        $query = " Select * from companys";
        $result = mysqli_query($conection , $query);
        
    }

    public function delete(){

    }

    public function __construct($id, $name, $federation){
        $this->id = $id;
        $this->name = $name;
        $this->federation = $federation;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getFederation(){
        return $this->federation;
    }
    
    public function setId($id){
        return $this->id = $id;
    }

    public function setName($name){
        return $this->name = $name;
    }

    public function setFederation($federation){
        return $this->federation = $federation;
    }   
}