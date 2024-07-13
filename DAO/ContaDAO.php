<?php 

require_once 'Conexao.php';
require_once 'UtilDAO.php';

class ContaDAO extends Conexao{
    public function CadastrarConta($banco, $agencia, $conta, $saldo){
        
        if(trim($banco) == '' || trim($agencia) == '' || trim($conta) == '' || trim($saldo) == ''){
            return 0;
        }

         // 1º passo: criar uma variável que receberá o obj de conexao
         $conexao = parent::retornarConexao();

         // (ATENÇÃO) 2º passo: criara uma variável que receberá o texto do comando SQL que deverá ser executado no BD
         $comando_sql = 'insert into tb_conta
                        (banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
                        values (?,?,?,?,?);';
                     
         // 3º passo: criar um objeto que será configurado e enviado ao BD para ser executado
         $sql = new PDOStatement();
 
         // 4º passo: colocar dentro do objeto $sql a conexão preparada para executar o comando_sql
         $sql = $conexao->prepare($comando_sql);
         
         //(ATENÇÃO) 5º passo: verificar se no comando_sql eu tenho ? para ser configurado. Se tiver, configurar os bindValues
         $sql->bindValue(1, $banco);
         $sql->bindValue(2, $agencia);
         $sql->bindValue(3, $conta);
         $sql->bindValue(4, $saldo);
         $sql->bindValue(5, UtilDAO::UsuarioLogado());
 
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
}
?>