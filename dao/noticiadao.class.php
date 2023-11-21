<?php
include '../persistencia/conexaobanco.class.php';
class NoticiaDAO{
    private $conexao=null;

    public function __construct(){
        $this->conexao = ConexaoBanco::getInstancia();
    }//fecha o construtor

    public function cadastrarNoticia($n){
        try{
            $stat = $this->conexao->prepare("insert into noticia(idNoticia,titulo,noticia,data,hora,seltiponoticia)values(null,?,?,?,?,?)" );

            $stat->bindValue(1,$u->titulo);
            $stat->bindValue(2,$u->noticia);
            $stat->bindValue(3,$u->data);
            $stat->bindValue(4,$u->hora);
            $stat->bindValue(5,$u->seltiponoticia);

            $stat->execute();

            //Encerrando a conexao
            $this->conexao=null;
            
        }catch(PDOException $e){
            echo 'Erro ao cadastrar noticia';
        }//fecha o catch
    }//fecha o método

    public function buscarNoticia(){
        try{
            $stat = $this->conexao->query("select * from noticia" );

            $array = array();
            $array =$stat->fetchAll(PDO::FETCH_CLASS, 'noticia');

            //Encerrando a conexao
            $this->conexao=null;
            return $array;
            
        }catch(PDOException $e){
            echo 'Erro ao buscar noticia!';
        }//fecha o catch
    }//fecha o método

    public function deletarNoticia($idNoticia){
        try{
            $stat = $this->conexao->prepare("delete from noticia where idNoticia=?");
            $stat->bindValue(1,$idNoticia);
            $stat->execute();

            $this->conexao=null;
        }catch(PDOException $e){
            echo 'Erro ao deletar noticia!';
        }
    }//fecha o método deletarUsuario

    public function verificarNoticia($n){
        try{
            $stat = $this->conexao->query("select * from noticia where titulo='$n->titulo' and noticia'$n->noticia'");

            $noticia = $stat->fetchObject('noticia');//
            return $noticia;

        }catch(PDOException $e){
            echo 'Erro ao verificar noticia!';
        }
    }



    public function buscarNoticia($query){
        try {
            $stat = $this->conexao->query("select * from noticia " . $query);
            $array = $stat->fetchAll(PDO::FETCH_CLASS, 'Noticia');
            $this->conexao = null;
            return $array;
        } catch (PDOException $e) {
            echo 'Erro ao buscar com filtro!';
        }
    }
    
  

    public function alterarNoticia($not){
        try{
            $stat = $this->conexao->prepare('update noticia set titulo = ?, noticia = ?, data = ?, hora = ?, seltiponoticia = ? where idnoticia = ?');
            $stat->bindValue(1,$not->titulo);
            $stat->bindValue(2,$not->noticia);
            $stat->bindValue(3,$not->data);
            $stat->bindValue(4,$not->hora);
            $stat->bindValue(5,$not->idnoticia);

            $stat->execute();

            $this->conexao = null;
        }catch(PDOException $e){
            echo 'Erro ao alterar noticia!';
        }
    }

    


}//fecha a classe UsuarioDAO
?>