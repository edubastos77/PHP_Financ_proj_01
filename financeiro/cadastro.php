<?php

require_once '../DAO/UsuarioDAO.php';

if(isset($_POST['btnFinalizar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $rsenha = $_POST['rsenha'];

    $objDAO = new UsuarioDAO();
    $ret = $objDAO->CriarCadastro($nome, $email, $senha, $rsenha);

}

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once "_head.php";
?>

<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <?php include_once '_msg.php' ?>
                <h2> Controle Financeiro : Cadastro</h2>

                <h5>( Faça o seu cadastro )</h5>
                <br />
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Preencher todos os campos </strong>
                    </div>
                    <div class="panel-body">
                        <form action="cadastro.php" method="POST">
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
                                <input type="text" class="form-control" placeholder="Seu nome" name="nome" id="nome"/>
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Seu e-mail" name="email" id="email"/>
                            </div>
                            <span style="font-size: 10px;">Mínimo de 6 e Máximo de 8 caracteres"</span>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Crie uma senha" name="senha" id="senha"/>
                               
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Repita a senha criada" name="rsenha" id="rsenha"/>
                            </div>

                            <button name="btnFinalizar" onclick="return ValidarCadastro()" class="btn btn-success ">Finalizar cadastro</button>
                            <hr />
                            Já possui cadastro ? <a href="login.php">Clique aqui</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>