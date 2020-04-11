<?php 

class HomeController{

    

    public function login(){
        header("location: /Treinamento 2019.2/views/login.php");
    }

    public function index(){
        header("location: /Treinamento 2019.2/views/home.php");
    }
}