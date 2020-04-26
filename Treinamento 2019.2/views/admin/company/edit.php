<?php 
    require_once "../../../dataBase/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    require_once "../../../models/Company.php";
    UserController::verifyLogin();    
?>

<?php
    $company = Company::find($_GET['id']);
?>

<html>
    <form action="/Treinamento 2019.2/company/update" method="post">
        <input name="name" placeholder="name">
        <input name="federation" placeholder="federation">          
        <button type="submit"> Salvar </button>
    </form>
</html>