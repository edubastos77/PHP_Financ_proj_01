<?php 

require_once '../DAO/CategoriaDAO.php';

if(isset($_POST['btnGravar'])){
    $nome = $_POST['nome'];

    $objdao = new CategoriaDAO();
    $ret = $objdao->CadastrarCategoria($nome);
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
                        <?php include_once '_msg.php'; ?>
                        <h2>Nova Categoria</h2>
                        <h5>Aqui você poderá cadastrar todas as suas categorias. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="nova_categoria.php" method="POST">
                    <div class="form-group">
                        <label>Nome da Categoria</label>
                        <input class="form-control" placeholder="Digite o nome da categoria. Exemplo: Conta de Luz"
                            name="nome" id="nomecategoria"/>
                    </div>
                    <button onclick="return ValidarCategoria()" type=" submit" class="btn btn-success" name="btnGravar">Gravar</button>
                </form>
            </div>
        </div>
    </div>



</body>

</html>