<?php

require_once '../DAO/UsuarioDAO.php';

if (isset($_POST['btnAcessar'])) {
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);


    $objDAO = new UsuarioDAO();
    $ret = $objDAO->ValidarLogin($email, $senha);
}

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once "_head.php";
?>

<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br />
                <?php include_once '_msg.php' ?>
                <br />
                <h2> Controle Financeiro : ACESSO</h2>

                <h5>( Faça o seu login )</h5>
                <br />
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Entre com seus dados </strong>
                    </div>
                    <div class="panel-body">
                        <form action="login.php" method="POST">
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="text" class="form-control" placeholder="Seu e-mail " name="email" id="email"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Sua senha" name="senha" id="senha"/>
                            </div>
                           

                            <button name="btnAcessar" onclick="return ValidarLogin()" class="btn btn-primary ">Acessar</button>
                            <hr />
                            Caso não tenha cadastro, <a href="cadastro.php">Clique aqui</a>
                        </form>
                    </div>

                </div>
            </div>


        </div>
    </div>


</body>

</html>