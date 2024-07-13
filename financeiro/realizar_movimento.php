<?php

require_once '../DAO/MovimentoDAO.php';

$tipo = '';
$data = '';

if (isset($_POST['btnGravar'])) {
    $tipo = $_POST['tipo'];
    $data = $_POST['data'];
    $valor = trim($_POST['valor']);
    $categoria = $_POST['categoria'];
    $empresa = $_POST['empresa'];
    $conta = $_POST['conta'];
    $obs = trim($_POST['obs']);

    $objdao = new MovimentoDAO();
    $ret = $objdao->CadastrarMovimento($tipo, $data, $valor, $categoria, $empresa, $conta, $obs);
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
                        <h2>Realizar Movimento</h2>
                        <h5>Aqui você poderá realizar seus movimentos de Entrada e Saída. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="realizar_movimento.php" method="POST">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Tipo de Movimento*</label>
                            <select id="tipo" name="tipo" class="form-control">
                                <option value="">Selecione</option>
                                <option value="1">Entrada</option>
                                <option value="2">Saída</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Data*</label>
                            <input id="data" type="date" class="form-control" placeholder="Coloque a data do Movimento." name="data" />
                        </div>
                        <div class="form-group">
                            <label>Valor*</label>
                            <input id="valor" class="form-control" placeholder="Digite o valor do movimento." name="valor" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Categoria*</label>
                            <select id="categoria" name="categoria" class="form-control">
                                <option value="">Selecione</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Empresa*</label>
                            <select id="empresa" name="empresa" class="form-control">
                                <option value="">Selecione</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Conta*</label>
                            <select id="conta" name="conta" class="form-control">
                                <option value="">Selecione</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Observação (opcional)</label>
                            <textarea class="form-control" rows="3" name="obs"></textarea>
                        </div>
                        <button name="btnGravar" onclick="return ValidarMovimento()" type="submit" class="btn btn-success">Finalizar Lançamento</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>