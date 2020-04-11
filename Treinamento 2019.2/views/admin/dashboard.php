<?php 
    require_once "../../dataBase/Connection.php";
    require_once "../../models/User.php";
    require_once "../../controllers/UserController.php";
    UserController::verifyLogin();
    echo "Olá ".$_SESSION['user'];
?>
<a href="/Treinamento 2019.2/user/logout">Sair</a>

<br>
<br>
<div>
    <a href="/Treinamento 2019.2/company/index">Listar empresas</a>
    <a href="/Treinamento 2019.2/company/create">Cadastrar empresa</a>
</div>