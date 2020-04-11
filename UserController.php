<?php 

session_start();

class UserController{

    public function check(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = User::find($email,$password);
        if(!$user){
            header("location: /Treinamento 2019.2/views/login.php");
        }
        else{
            $_SESSION['user'] = $user;
            header("location: /Treinamento 2019.2/views/admin/dashboard.php");
        }
    }

    public static function verifyLogin(){
        
    }

    public static function logout(){
        header("location: /Treinamento 2019.2/views/login.php");
    }
}