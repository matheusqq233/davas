<?php

class Usuario {
    // Atributos
    private $idUsuario;
    private $nome;
    private $cpf;
    private $senha;
    private $dtnasc;
    private $tipo;

    // Construtor
    public function __construct() {
        // Se precisar de lógica no construtor, adicione aqui
    }

    // Métodos Mágicos
    public function __get($atrib) {
        return $this->$atrib;
    }

    public function __set($atrib, $valor) {
        $this->$atrib = $valor;
    }

    // Método toString
    public function __toString() {
        return '<br>Código: ' . $this->idUsuario .
               '<br>Nome: ' .$this->nome .
               '<br>CPF: ' . $this->cpf .
               '<br>Senha: ' . $this->senha .
               '<br>Data de Nascimento: ' . $this->dtnasc .
               '<br>Tipo de Sexo: ' . $this->tipo;
    }
}
?>
