<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';

class UsuarioDAO extends Conexao
{
    public function CarregarMeusDados()
    {
        $conexao = parent::retornarConexao();
        $comando_sql = 'select  nome_usuario,
                                email_usuario
                          from  tb_usuario
                         where  id_usuario = ?';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);
        $sql->bindValue(1, UtilDAO::UsuarioLogado());

        // Será realizada uma consulta via PDO no banco de dados, o que for encontrado retorna em um Array.
        // Remove os index dentro do Array permanecendo apenas as colunas do BD
        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }
    public function GravarMeusDados($nome, $email)
    {
        if (trim($nome) == '' || trim($email) == '') {
            return 0;
        }

        $conexao = parent::retornarConexao();
        $comando_sql = 'update tb_usuario
                           set nome_usuario = ?,
                               email_usuario = ?
                        where  id_usuario = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $email);
        $sql->bindValue(3, UtilDAO::UsuarioLogado());

        try {
            $sql->execute();

            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage(); // comentar quando for para produção (entrega ao cliente)
            return -1;
        }
    }

    public function ValidarLogin($email, $senha)
    {
        if (trim($email) == '' || trim($senha) == '') {
            return 0;
        }
    }

    public function CriarCadastro($nome, $email, $senha, $rsenha)
    {
        if (trim($nome) == '' || trim($email) == '' || trim($senha) == '' || trim($rsenha) == '') {
            return 0;
        }
        if (strlen($senha) < 6) {
            return -2;
        }
        if (trim($senha) != trim($rsenha)) {
            return -3;
        } else {
            $conexao = parent::retornarConexao();
            $comando_sql = 'insert into tb_usuario(nome_usuario, email_usuario, senha_usuario, data_cadastro)values(?,?,?,?);';

            $sql = new PDOStatement();
            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, $nome);
            $sql->bindValue(2, $email);
            $sql->bindValue(3, $senha);
            $sql->bindValue(4, date('Y-m-d'));

            try {
                $sql->execute();
                return 1;
            } catch (Exception $ex) {
                echo $ex->getMessage(); // comentar quando for para produção (entrega ao cliente)
                return -1;
            }
        }
    }
}
