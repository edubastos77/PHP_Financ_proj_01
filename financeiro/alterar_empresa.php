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
                        <h2>Alterar Empresa</h2>
                        <h5>Aqui você poderá alterar ou excluir o cadastro de Empresa. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="form-group">
                    <label>Nome da Empresa</label>
                    <input class="form-control" placeholder="Digite o nome da Empresas. Exemplo: Casas Bahia" id="nomeempresa"/>
                </div>
                <button onclick="return ValidarEmpresa()" type="submit" class="btn btn-success">Gravar</button>
                <button type="submit" class="btn btn-danger">Excluir</button>
            </div>
        </div>
    </div>
</body>

</html>