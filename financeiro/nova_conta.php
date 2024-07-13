<?php

require_once '../DAO/ContaDAO.php';

if (isset($_POST['btnGravar'])) {
    $banco = $_POST['banco'];
    $agencia = $_POST['agencia'];
    $conta = $_POST['conta'];
    $saldo = $_POST['saldo'];

    $objdao = new ContaDAO();
    $ret = $objdao->CadastrarConta($banco, $agencia, $conta, $saldo);
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
                        <h2>Nova Conta Bancária</h2>
                        <h5>Aqui você poderá Cadastrar as Contas Bancárias. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="nova_conta.php" method="POST">
                    <div class="form-group">
                        <label>Nome do Banco</label>
                        <input class="form-control" placeholder="Digite o nome do Banco..." name="banco" id="banco"/>
                    </div>
                    <div class="form-group">
                        <label>Agência</label>
                        <input type="number" class="form-control" placeholder="Digite a Agência..." name="agencia" id="agencia"/>
                    </div>
                    <div class="form-group">
                        <label>Número da Conta</label>
                        <input type="number" class="form-control" placeholder="Digite a Conta..." name="conta" id="conta"/>
                    </div>
                    <div class="form-group">
                        <label>Saldo</label>
                        <input type="number" class="form-control" placeholder="Digite o Saldo..." name="saldo" id="saldo"/>
                    </div>
                    <button name="btnGravar" onclick="return ValidarConta()" type="submit" class="btn btn-success">Gravar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>