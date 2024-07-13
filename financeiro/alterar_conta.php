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
                        <h2>Alterar Conta Bancária</h2>
                        <h5>Aqui você poderá alterar ou excluir o cadastro de Conta Bancária. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="form-group">
                    <label>Nome do Banco</label>
                    <input class="form-control" placeholder="Digite o nome do Banco..." id="banco"/>
                </div>
                <button type="submit" onclick="return ValidarConta()" class="btn btn-success">Gravar</button>
                <button type="submit" class="btn btn-danger">Excluir</button>
            </div>
        </div>
    </div>

</body>

</html>