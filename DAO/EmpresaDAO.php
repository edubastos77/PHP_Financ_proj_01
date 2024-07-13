<?php 
require_once 'Conexao.php';
require_once 'UtilDAO.php';

class EmpresaDAO extends Conexao{
    public function CadastrarEmpresa($nome, $tel, $endereco){
        if($nome == '' || $tel == '' || $endereco == ''){
            return 1;
        }

        // 1º passo: criar uma variável que receberá o obj de conexao
        $conexao = parent::retornarConexao();

        // 2º passo: criara uma variável que receberá o texto do comando SQL que deverá ser executado no BD
        $comando_sql = 'insert into tb_empresa
                        (nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
                        values (?,?,?,?);';
                    
        // 3º passo: criar um objeto que será configurado e enviado ao BD para ser executado
        $sql = new PDOStatement();

        // 4º passo: colocar dentro do objeto $sql a conexão preparada para executar o comando_sql
        $sql = $conexao->prepare($comando_sql);
        
        // 5º passo: verificar se no comando_sql eu tenho ? para ser configurado. Se tiver, configurar os bindValues
        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $tel);
        $sql->bindValue(3, $endereco);
        $sql->bindValue(4, UtilDAO::UsuarioLogado());

        // 6º passo: Bloco de tratamento de Erro

        try{

            // 7º passo: executar no BD
            $sql->execute();

            return 1;
        }
        catch(Exception $ex){
            echo $ex->getMessage(); // comentar quando for para produção (entrega ao cliente)
            return -1;
        }
    }
    public function ConsultarEmpresa(){
        $conexao = parent::retornarConexao();

        $comando_sql = 'select id_empresa,
                               nome_empresa,
                               telefone_empresa,
                               endereco_empresa
                          from tb_empresa
                         where id_usuario = ?';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::UsuarioLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();

    }
    public function DetalharEmpresa($idEmpresa){
        if($idEmpresa){
            return 0;
        }

    }
    public function AlterarEmpresa($nome, $tel, $endereco){
        if($nome == '' || $tel == '' || $endereco == ''){
            return 1;
        }

    }
    public function ExcluirEmpresa($idEmpresa){

    }
}
?>