<?php 
require_once 'Conexao.php';
require_once 'UtilDAO.php';

class CategoriaDAO extends Conexao
{
    public function CadastrarCategoria($nome){
        
     if(trim($nome) == ''){
            return 0;
        }

        // 1º passo: criar uma variável que receberá o obj de conexao real da Classe Conexão
        $conexao = parent::retornarConexao();

        // 2º passo: criara uma variável que receberá o texto do comando SQL que deverá ser executado no BD
        $comando_sql = 'insert into tb_categoria(nome_categoria, id_usuario) values (?,?);';
                    
        // 3º passo: criar um objeto que será configurado e enviado ao BD para ser executado
        $sql = new PDOStatement();

        // 4º passo: colocar dentro do objeto $sql a conexão preparada para executar o comando_sql (Script SQL)
        $sql = $conexao->prepare($comando_sql);
        
        // 5º passo: verificar se no comando_sql eu tenho ? para ser configurado. Se tiver, configurar os bindValues. Validar a identificação dos daods inseridos no BD.
        $sql->bindValue(1, $nome);
        $sql->bindValue(2, UtilDAO::UsuarioLogado());

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

    public function AlterarCategoria($nome, $idCategoria){
        if(trim($nome) == '' || $idCategoria == ''){
            return 0;
        }
        $conexao = parent::retornarConexao();
        $comando_sql = 'update tb_categoria
                        set nome_categoria = ?
                        where id_categoria = ?
                           and id_usuario = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $idCategoria);
        $sql->bindValue(3, UtilDAO::UsuarioLogado());

        try{
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }

    }

    public function ExcluirCategoria($idCategoria){
        if($idCategoria == ''){
            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'delete 
                        from tb_categoria
                        where id_categoria = ?
                           and id_usuario = ?';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $idCategoria);
        $sql->bindValue(2, UtilDAO::UsuarioLogado());

        try{
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            return -4;
        }

    }

    public function ConsultarCategoria(){
        $conexao = parent::retornarConexao();
        $comando_sql = 'select id_categoria,
                               nome_categoria
                            from tb_categoria
                           where id_usuario = ?';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::UsuarioLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();
        return $sql->fetchAll();

    }

    public function DetalharCategoria($idCategoria){
        $conexao = parent::retornarConexao();
        $comando_sql = 'select id_categoria,
                                nome_categoria
                             from tb_categoria
                         where id_categoria = ?
                          and id_usuario = ?';
        
        $sql = new PDOStatement();
        
        $sql = $conexao->prepare($comando_sql);
        
        $sql->bindValue(1, $idCategoria);
        $sql->bindValue(2, UtilDAO::UsuarioLogado());
        
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();
        return $sql->fetchAll();


    }

}
?>