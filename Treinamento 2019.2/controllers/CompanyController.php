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
        $teste = $id[0];
        header("location: /Treinamento 2019.2/views/admin/company/edit.php?id={$teste}");
    }

    public function update($id){
        $name = $_POST['name'];
        $federation = $_POST['federation'];
        Company::update($name,$federation,$id);
        header("location: /Treinamento 2019.2/views/admin/dashboard.php");
    }

    public function delete($id){
        Company::delete($id);
        header("location: /Treinamento 2019.2/views/admin/dashboard.php");
    }

    public static function all(){
        $company = Company::all();
        return $company;
    }
}