<?php
    class Noticia{
        //Atributos
        private $idNoticia;
        private $titulo;
        private $noticia;
        private $data;
        private $hora;
        private $seltiponoticia;

        //Construtor
        public function __construct(){
            

        }//fecha o construtor

        public function usuario(){

        }

        public function __get($atrib) {
            return $this->$atrib;
        }

        public function __set($atrib, $valor) {
            $this->$atrib = $valor;
        }

        public function __toString(){
            return '<br>Código: '.$this->idNoticia. 
                   '<br>Titulo: '.$this->titulo. 
                   '<br>Noticia: '.$this->noticia.
                   '<br>Data: '.$this->data.
                   '<br>Hora: '.$this->hora. 
                   '<br>Tipo de Noticia: '.$this->seltiponoticia; 
        }
    }//fecha a classe Usuario
?>