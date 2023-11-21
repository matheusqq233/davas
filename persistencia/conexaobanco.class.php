<?php
class ConexaoBanco extends PDO {
    private static $instancia = null;

    private function __construct($dsn, $usuario, $senha) {
        // Construtor pai do PDO
        parent::__construct($dsn, $usuario, $senha, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    public static function getInstancia() {
        if (!isset(self::$instancia)) {
            try {
                /* Cria e retorna uma nova conexão */
                self::$instancia = new ConexaoBanco("mysql:dbname=noticias;host=localhost", "root", "");
            } catch (Exception $e) {
                echo 'Erro ao conectar';
                exit();
            }
        }
        return self::$instancia;
    }
}
?>
