<?php

require_once '../DAO/EmpresaDAO.php';

if(isset($_POST['btnGravar'])){
    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $endereco = $_POST['endereco'];

    $objdao = new EmpresaDAO();
    $ret = $objdao->CadastrarEmpresa($nome, $tel, $endereco);

}


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include_once "_head.php";
?>

<body>
    <div id="wrapper">
        <?php
        include_once "_topo.php";
        include_once "_menu.php";
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php include_once '_msg.php' ?>
                        <h2>Nova Empresa</h2>
                        <h5>Aqui você poderá Cadastrar todos os nomes das empresas. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="nova_empresa.php" method="POST">
                <div class="form-group">
                    <label>Nome da Empresa</label>
                    <input class="form-control" placeholder="Digite o nome da empresa. Exemplo: Casas Bahia..." name="nome" id="nomeempresa"/>
                </div>
                <div class="form-group">
                    <label>Telefone/WhatsApp</label>
                    <input type="number" class="form-control"
                        placeholder="Digite o Telefone/WhatsApp da empresa (Opcional)." name="tel" id="telefone" />
                </div>
                <div class="form-group">
                    <label>Endereço</label>
                    <input class="form-control" placeholder="Digite o Endereço da empresa (Opcional)." name="endereco" id="endereco" />
                </div>
                <button name="btnGravar" onclick="return ValidarEmpresa()" type="submit" class="btn btn-success">Gravar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>