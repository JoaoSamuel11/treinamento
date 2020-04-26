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
        $query = " Select * from companys";
        $result = mysqli_query($conection , $query);
        if(mysqli_num_rows($result) >= 1){
            for($i=0 ; $i<mysqli_num_rows($result); $i++){
                $company = mysqli_fetch_assoc($result);
                $companys[$i] = new Company($company['id'],$company['name'],$company['federation']);
            }
            return $companys;
        }
        else{
            return false;
        }
        
    }

    public static function delete($id){
        $conection = Connection::getConnection();
        $query = "DELETE FROM companys WHERE id = '{$id[0]}'";
        $result = mysqli_query($conection , $query);
        mysqli_close($conection);
    }

    public static function update($name,$federation,$id){
        $conection = Connection::getConnection();
        $query="update cliente set nome '{$name}' and federation '{$federation}' where id = '{$id}'";
        mysqli_close($conection);
    }

    public static function find($id){
        $conection = Connection::getConnection();
        $query = "select * from users where id = '{$id}'";
        $result = mysqli_query($conection , $query);
        if(mysqli_num_rows($result) > 0){
            $company = mysqli_fetch_assoc($result);
            $var = new Company($id,$company["name"],$company['federation']);
            return $var;
        }
        else{
            return false;
        }
        mysqli_close($conection);
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