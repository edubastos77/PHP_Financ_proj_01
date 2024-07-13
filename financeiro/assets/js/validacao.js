// Variável Javascript que contém uma mensagem genérica!
var msg = "Preencher o campo obrigatório ";

function ValidarMeusDados() {

    if ($("#nome").val().trim() == '') {
        alert(msg + "NOME");
        $("#nome").focus();
        return false;
    }
    if ($("#email").val().trim() == '') {
        alert(msg + "E-MAIL");
        $("#email").focus();
        return false;
    }
}

// função com boas prática aplicada

function ValidarCategoria() {

    if ($("#nomecategoria").val().trim() == '') {
        alert(msg + "NOME DA CATEGORIA");
        $("#nomecategoria").focus();
        return false;
    }
}

function ValidarEmpresa() {

    if ($("#nomeempresa").val().trim() == '') {
        alert(msg + "NOME DA EMPRESA");
        $("#nomeempresa").focus();
        return false;
    }
    if ($("#telefone").val().trim() == '') {
        alert(msg + "TELEFONE");
        $("#telefone").focus();
        return false;
    }
    if ($("#endereco").val().trim() == '') {
        alert(msg + "ENDEREÇO");
        $("#endereco").focus();
        return false;
    }
}

function ValidarConta() {

    if ($("#banco").val().trim() == '') {
        alert(msg + "BANCO");
        $("#banco").focus();
        return false;
    }
    if ($("#agencia").val().trim() == '') {
        alert(msg + "AGÊNCIA");
        $("#agencia").focus();
        return false;
    }
    if ($("#conta").val().trim() == '') {
        alert(msg + "CONTA");
        $("#conta").focus();
        return false;
    }
    if ($("#saldo").val().trim() == '') {
        alert(msg + "SALDO");
        $("#saldo").focus();
        return false;
    }
}

function ValidarMovimento() {
    if ($("#tipo").val() == '') {
        alert(msg + "TIPO DE MOVIMENTO");
        $("#tipo").focus();
        return false;
    }
    if ($("#data").val().trim() == '') {
        alert(msg + "DATA");
        $("#data").focus();
        return false;
    }
    if ($("#valor").val().trim() == '') {
        alert(msg + "VALOR");
        $("#valor").focus();
        return false;
    }
    if ($("#categoria").val() == '') {
        alert(msg + "CATEGORIA");
        $("#categoria").focus();
        return false;
    }
    if ($("#empresa").val() == '') {
        alert(msg + "EMPRESA");
        $("#empresa").focus();
        return false;
    }
    if ($("#conta").val() == '') {
        alert(msg + "CONTA");
        $("#conta").focus();
        return false;
    }
}

function ValidarConsultaPeriodo() {
    if ($("#data_inicial").val().trim() == '') {
        alert(msg + "DATA INICIAL");
        $("#data_inicial").focus();
        return false;
    }
    if ($("#data_final").val().trim() == '') {
        alert(msg + "DATA FINAL");
        $("#data_final").focus();
        return false;
    }
}
function ValidarLogin() {
    if ($("#email").val().trim() == '') {
        alert(msg + "E-MAIL");
        $("#email").focus();
        return false;
    }
    if ($("#senha").val().trim() == '') {
        alert(msg + "SENHA");
        $("#senha").focus();
        return false;
    }
    if ($("#senha").val().trim().lenght < 6 || $("#senha").val().trim().lenght > 8){
        alert("A SENHA deve conter entre 6 e 8 caracteres!");
        $("#senha").focus();
        return false;
    } 
}
function ValidarCadastro() {
    if ($("#nome").val().trim() == '') {
        alert(msg + "NOME");
        $("#nome").focus();
        return false;
    }
    if ($("#email").val().trim() == '') {
        alert(msg + "E-MAIL");
        $("#email").focus();
        return false;
    }
    if ($("#senha").val().trim() == '') {
        alert(msg + "SENHA");
        $("#senha").focus();
        return false;
    }
    if ($("#rsenha").val().trim() == '') {
        alert(msg + "REPETIR SENHA");
        $("#rsenha").focus();
        return false;
    }
    if ($("#senha").val().trim().length < 6 || $("#senha").val().trim().lenght > 8) {
        alert("A senha deverá conter entre 6  e 8 caracteres");
        $("#senha").focus();
        return false;
    }
    if ($("#senha").val().trim() != $("#rsenha").val().trim()) {
        alert("O campo SENHA e REPETIR SENHA deverão ser iguais");
        $("#rsenha").focus();
        return false;
    }
}
