<?php
session_start();
// session_unset(); // Removendo as sessões anteriores (comentado para evitar problemas)

include_once '../modelo/noticia.class.php';
include_once '../util/validacao.class.php';
include_once '../dao/noticiadao.class.php';
include_once '../util/controlelogin.class.php';

if (isset($_GET['op'])) {

    switch ($_GET['op']) {

        case 'cadastrarNoticia':
            // Cadastro com validação - testando se existem
            if (
                isset($_POST['txttitulo']) &&
                isset($_POST['txtnoticia']) &&
                isset($_POST['txtdata']) &&
                isset($_POST['txthora']) &&
                isset($_POST['seltiponoticia'])
            ) {
                // Recebendo os dados
                $titulo = $_POST['txttitulo'];
                $noticia = $_POST['txtnoticia'];
                $data = $_POST['txtdata'];
                $hora = $_POST['txthora'];
                $seltiponoticia = $_POST['seltiponoticia'];

                // Fazendo a validação
                $erros = array();

                if (!Validacao::testarTitulo($titulo)) {
                    $erros[] = 'Título inválido!';
                }

                if (!Validacao::testarNoticia($noticia)) {
                    $erros[] = 'Notícia inválida!';
                }

                if (!Validacao::testarData($data)) {
                    $erros[] = 'Data inválida!';
                }

                if (!Validacao::testarHora($hora)) {
                    $erros[] = 'Hora inválida!';
                }

                if (!Validacao::testarTipoNoticia($seltiponoticia)) {
                    $erros[] = 'Tipo de Notícia inválida!';
                }

                if (count($erros) == 0) {
                    $n = new Noticia();
                    $n->titulo = $titulo;
                    $n->noticia = $noticia;
                    $n->data = $data;
                    $n->hora = $hora;
                    $n->seltiponoticia = $seltiponoticia;

                    $nDAO = new NoticiaDAO();
                    $nDAO->cadastrarNoticia($n);

                    $_SESSION['n'] = serialize($n);

                    header("location:../visao/guirespostanoticia.php");
                } else {
                    $_SESSION['erros'] = serialize($erros);
                    header("location:../visao/guierro.php");
                }
            } else {
                echo 'DEU RUIM NA NOTÍCIA!';
            }
            break;

        case 'consultarNoticia':
            $nDAO = new NoticiaDAO();

            $array = $nDAO->buscarNoticia();

            $_SESSION['noticia'] = serialize($array);
            header("location:../visao/guiconsultanoticia.php");
            break;

        case 'deletarNoticia':
            if (isset($_REQUEST['idNoticia'])) {
                $nDAO = new NoticiaDAO();
                $nDAO->deletarNoticia($_REQUEST['idNoticia']);

                header('location:../controle/usuariocontrole.php?op=consultarNoticia');
            } else {
                echo 'idNoticia não existe';
            }
            break;


        


        case 'deslogar':
            ControleLogin::deslogar();
            
        break;

        case 'buscarNoticia':
            if( isset($_POST['txtfiltro']) &&
                isset($_POST['rdfiltro'])){
                    $erros = array();
                    if(!Validacao::validarFiltro($_POST['txtfiltro'])){
                        $erros[] = 'Dado Inválido!';
                    }

                    if(count($erros) == 0){
                        $nDAO = new NoticiaDAO();
                        $noticia = array();
                    

                        if ($_POST['rdfiltro'] == 'idnoticia') {
                            $query = "where idnoticia = " . $_POST['txtfiltro'];
                        } else if ($_POST['rdfiltro'] == 'titulo') {
                            $query = "where titulo = \"" . $_POST['txtfiltro'] . "\"";
                        } else if ($_POST['rdfiltro'] == 'partestitulo') {
                            $query = "where titulo like '%" . $_POST['txtfiltro'] . "%'";
                        } else if ($_POST['rdfiltro'] == 'partesnoticia') {
                            $query = "where noticia like '%" . $_POST['txtfiltro'] . "%'";   
                        } else if ($_POST['rdfiltro'] == 'data') {
                            $query = "where data = \"" . $_POST['txtfiltro'] . "\"";    
                        } else if($_POST['rdfiltro'] == 'hora'){
                            $query = "where hora = \"" . $_POST['txtfiltro'] . "\"";
                        } else{
                            $query = "where seltiponoticia = \"" . $_POST['txtfiltro'] . "\"";
                        }
                        

                    $noticia = $nDAO->buscarNoticia($query);

                    $_SESSION['noticia']=serialize($noticia);
                    header('location:../visao/guiconsultanoticia.php');
                }else{
                    $_SESSION['erros'] = serialize($erros);
                    header('location:../visao/guierro.php');
                }
                }else{
                    echo 'Variáveis não existem!';
                }

        break;

        
        
        case 'alterarNoticia':
            if( isset($_GET['idNoticia'])){
                $query = 'where idnoticia = '.$_GET['idNoticia'];

                $nDAO = new NoticiaDAO();
                $noticias = array();
                $noticias = $nDAO->buscarNoticia($query);


                $_SESSION['noticias'] = serialize($noticias);
                header('location:../visao/guialterarnoticia.php');

            }else{
                echo 'Não existem variáveis!';
            }
        break;
        
        case 'confirmalterarnoticia':
            if( isset($_POST['txtidnoticia']) &&
                isset($_POST['txttitulo']) &&
                isset($_POST['txtnoticia']) &&
                isset($_POST['data']) &&
                isset($_POST['hora']) &&
                isset($_POST['seltiponoticia'])){

                    $idNoticia = $_POST['txtidnoticia'];
                    $titulo = $_POST['txttitulo'];
                    $noticia = $_POST['txtnoticia'];
                    $data = $_POST['data'];
                    $hora = $_POST['hora'];
                    $seltiponoticia = $_POST['seltiponoticia'];
                    
                   

                    $erros = array();

                    if(!Validacao::testarTitulo($titulo) ){
                        $erros[] = 'Titulo inválido!';
                    }

                    if(!Validacao::testarNoticia($noticia) ){
                        $erros[] = 'Noticia inválida!';
                    }

                    if(!Validacao::testarData($data) ){
                        $erros[] = 'Data inválida!';
                    }

                    if(!Validacao::testarHora($hora) ){
                        $erros[] = 'Hora inválida!';
                    }

                    if(!Validacao::testarTipoNoticia($seltiponoticia) ){
                        $erros[] = 'Tipo de Noticia inválida!';
                    }

                    if(count($erros) == 0){
                        $n = new Noticia();
                        $n->idnoticia = $idNoticia;
                        $n->titulo = $titulo;
                        $n->noticia = $noticia;
                        $n->data = $data;
                        $n->hora = $hora;
                        $n->seltiponoticia = $seltiponoticia;

                        $nDAO = new NoticiaDAO();
                        $nDAO->alterarNoticia($n);
                        $_SESSION['n'] = serialize($n);
                        header('location:../controle/usuariocontrole.php?op=consultarnoticia');
                    }else{
                        $_SESSION['msg'] = serialize($erros);
                        header('location:../visao/guierro.php');
                    }

                }else{
                    echo 'Variáveis não existem!';
                }
        break;

        default: echo 'Erro no switch';
        break;//fecha case cadastrar
    }//fecha o switch
}else{
    echo 'Variavel não existe';
}
    ?>