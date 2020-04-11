<?php

class CompanyController{
    
    public function index(){
        header("location: /Treinamento 2019.2/views/admin/company/index.php");
    }

    public function create(){
        header("location: /Treinamento 2019.2/views/admin/company/create.php");
    }

    public function store(){
        $name = $_POST['name'];
        $federation = $_POST['federation'];
        Company::create($name,$federation);
        header("location: /Treinamento 2019.2/views/admin/dashboard.php");
    }

    public function edit($id){
        header("location: /Treinamento 2019.2/views/admin/company/edit.php");
    }

    public function update($id){
        $name = $_POST['name'];
        $federation = $_POST['federation'];
    }

    public function delete($id){

    }

    public static function all(){
        $company = Company::all();
        return $company;
    }
}