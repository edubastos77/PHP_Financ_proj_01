<?php

// Essa validação, verifica se em algum momento, vai existir achave ret na URL com um valor numérico.
// Caso sim, o Switch Case pega o número atribuido a chave, eemite uma mensagem.

if (isset($_GET['ret'])) {
    $ret = $_GET['ret'];
}


if (isset($ret)) {
    switch ($ret) {
        case 0:
            echo '<div class="alert alert-warning">
            Preencher o(s) campo(s) obrigatório(s)!</div>';
            break;
        case 1:
            echo '<div class="alert alert-success">
            Ação realizada com SUCESSO!</div>';
            break;
        case -1:
            echo '<div class="alert alert-danger">
            Houve um problema, tente novamente mais tarde!</div>';
            break;
        case -2:
            echo '<div class="alert alert-warning">
            A senha deverá conter entre 6 e 8 caracteres!</div>';
            break;
        case -3:
            echo '<div class="alert alert-warning">
            As Senhas devem ser iguais!</div>';
            break;
        case -4:
            echo '<div class="alert alert-danger">
            O registro não poderá ser excluído, pois está em uso!</div>';
            break;
    }
}
