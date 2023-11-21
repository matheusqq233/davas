<?php

include_once '../dao/usuariodao.class.php';

class ControleLogin {

    public static function logar($u) {
        $uDAO = new UsuarioDAO();
        $usuario = $uDAO->verificarUsuario($u);

        if ($usuario && !is_null($usuario)) {
            $_SESSION['privateUser'] = serialize($usuario);
            header('location: ../indexposlogin.php');
        } else {
            $_SESSION['msg'] = 'Login/Senha inválidos!'; // Mensagem corrigida
            header('location: ../visao/guirespostausuario.php');
        }
    }

    public static function deslogar() {
        unset($_SESSION['privateUser']);
        $_SESSION['msg'] = 'Você foi deslogado!';
        header('location: ../visao/guirespostausuario.php');
    }

    public static function verificarAcesso() {
        if (!isset($_SESSION['privateUser'])) {
            $_SESSION['msg'] = 'Você não está logado!';
            header('location: ../visao/guirespostausuario.php');
        }
    }
}
?>
