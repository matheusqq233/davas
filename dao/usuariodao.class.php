<?php

include '../persistencia/conexaobanco.class.php';

class UsuarioDAO
{
    private $conexao = null;

    public function __construct()
    {
        $this->conexao = ConexaoBanco::getInstancia();
    }

    public function cadastrarUsuario($u)
    {
        try {
            $stat = $this->conexao->prepare("INSERT INTO usuario (nome, cpf, senha, dtnasc, tipo) VALUES (?, ?, ?, ?, ?)");
            $stat->execute([$u->nome, $u->cpf, $u->senha, $u->dtnasc, $u->tipo]);

            $this->conexao = null;
        } catch (PDOException $e) {
            throw new Exception('Erro ao cadastrar usuário: ' . $e->getMessage());
        }
    }

    public function buscarUsuario()
    {
        try {
            $stat = $this->conexao->query("SELECT * FROM usuario");
            $array = $stat->fetchAll(PDO::FETCH_CLASS, 'usuario');

            $this->conexao = null;
            return $array;
        } catch (PDOException $e) {
            throw new Exception('Erro ao buscar usuário: ' . $e->getMessage());
        }
    }

    public function deletarUsuario($idUsuario)
    {
        try {
            $stat = $this->conexao->prepare("DELETE FROM usuario WHERE idusuario = ?");
            $stat->execute([$idUsuario]);

            $this->conexao = null;
        } catch (PDOException $e) {
            throw new Exception('Erro ao deletar usuário: ' . $e->getMessage());
        }
    }

    public function verificarUsuario($u)
    {
        try {
            $stat = $this->conexao->prepare("SELECT * FROM usuario WHERE cpf = ? AND senha = ?");
            $stat->execute([$u->cpf, $u->senha]);

            $usuario = $stat->fetchObject('usuario');
            return $usuario;
        } catch (PDOException $e) {
            throw new Exception('Erro ao verificar usuário: ' . $e->getMessage());
        }
    }

    // ... Outros métodos ...

    public function alterarUsuario($usu)
    {
        try {
            $stat = $this->conexao->prepare('UPDATE usuario SET nome = ?, cpf = ?, senha = ?, dtnasc = ?, tipo = ? WHERE idusuario = ?');
            $stat->execute([$usu->nome, $usu->cpf, $usu->senha, $usu->dtnasc, $usu->tipo, $usu->idusuario]);

            $this->conexao = null;
        } catch (PDOException $e) {
            throw new Exception('Erro ao alterar usuário: ' . $e->getMessage());
        }
    }

    public function buscar($query){
        try {
            $stat = $this->conexao->query("select * from usuario " . $query);
            $array = $stat->fetchAll(PDO::FETCH_CLASS, 'Usuario');
            $this->conexao = null;
            return $array;
        } catch (PDOException $e) {
            echo 'Erro ao buscar com filtro!';
        }
    }

}
?>
