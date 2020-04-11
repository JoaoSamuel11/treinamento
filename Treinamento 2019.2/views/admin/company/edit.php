<?php 
    require_once "../../../dataBase/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    UserController::verifyLogin();    
?>


<html>
    <form action="/Treinamento 2019.2/company/udpate" method="post">
        <input name="name" value="<?php echo $company->getName()?>" placeholder="name">
        <input name="federation" value="<?php echo $company->getFedaration()?>" placeholder="federation">          
        <button type="submit"> Salvar </button>
    </form>
</html>