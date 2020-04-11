<?php


class User{
    private $id;
    private $name;
    private $email;
    private $password;

    public function __construct($id, $name, $email, $password){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public static function find($email, $password){
        $conection = Connection::getConnection();
        $query = "select * from users where email = '{$email}' and password = '{$password}'";
        $result = mysqli_query($conection , $query);
        if(mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result);
            $var = new User($user['id'], $user['name'], $result['email'], $result['password']);
            return $var;
        }
        else{
            return false;
        }
        mysqli_close($conection);
    }

    public function getId(){
        return $this->id;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getPassword(){
        return $this->password;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
        $this->password = $password;
    }
}