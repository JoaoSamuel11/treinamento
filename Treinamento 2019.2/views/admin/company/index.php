<?php
    require_once "../../../dataBase/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    require_once "../../../models/Company.php";
    require_once "../../../controllers/CompanyController.php";
    UserController::verifyLogin();
?>


<?php
    $companys = CompanyController::all();
    foreach ($companys as $company) {
?>

<a href="/Treinamento 2019.2/company/edit/<?php echo $company->getId()?>">
<button>
<?php echo $company->getId()?>
editar
</button>
</a>

<a href="/Treinamento 2019.2/company/delete/<?php echo $company->getId()?>">
<button>
excluir
</button>
</a>


<?php
    echo $company->getName();
    echo " | ";
    echo $company->getFederation();
    echo "<br>";
}
?>