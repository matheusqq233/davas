<?php
session_start();

include_once '../modelo/usuario.class.php';
include_once '../util/validacao.class.php';
include_once '../dao/usuariodao.class.php';
include_once '../util/controlelogin.class.php';


if (isset($_GET['op'])) {

    switch ($_GET['op']) {

        case 'cadastrarusuario':
            // Cadastro com validação - testando se existem
            if (isset($_POST['txtnome']) &&
                isset($_POST['txtcpf']) &&
                isset($_POST['txtsenha']) &&
                isset($_POST['dtnasc']) &&
                isset($_POST['seltipo'])) {

                // Recebendo os dados
                $nome = $_POST['txtnome'];
                $cpf = $_POST['txtcpf'];
                $senha = $_POST['txtsenha'];
                $dtnasc = $_POST['dtnasc'];
                $tipo = $_POST['seltipo'];

                // Fazendo a validação
                $erros = array();

                if (!Validacao::testarNome($nome)) {
                    $erros[] = 'Nome inválido!';
                }

                if (!Validacao::testarCpf($cpf)) {
                    $erros[] = 'CPF inválido!';
                }

                if (!Validacao::testarSenha($senha)) {
                    $erros[] = 'Senha inválida!';
                }

                if (!Validacao::testarDtNasc($dtnasc)) {
                    $erros[] = 'Data de Nascimento inválida!';
                }

                if (!Validacao::testarTipo($tipo)) {
                    $erros[] = 'Tipo inválido!';
                }

                // Se não houver erros, cadastra o usuário
                if (count($erros) == 0) {
                    $u = new Usuario();
                    $u->nome = $nome;
                    $u->cpf = $cpf;
                    $u->senha = $senha;
                    $u->dtnasc = $dtnasc;
                    $u->tipo = $tipo;

                    // Enviar o objeto $u para o banco de dados
                    $uDAO = new UsuarioDAO();
                    $uDAO->cadastrarUsuario($u);

                    $_SESSION['u'] = serialize($u);
                    $_SESSION['msg'] = 'Usuário ' . $u->nome .' cadastrado com sucesso!';

                    header("location:../visao/guirespostausuario.php");
                } else {
                    $_SESSION['erros'] = serialize($erros);
                    header("location:../visao/guierro.php");
                }
            } else {
                echo 'DEU RUIM!';
            } // fecha o isset

            break;


            case 'consultarUsuario':
                $uDAO = new UsuarioDAO();
                $array = $uDAO->buscarUsuario();
                $_SESSION['usuario'] = serialize($array);
                header("location:../visao/guiconsultaUsuario.php");
                break;
    
            case 'deletarUsuario':
                if (isset($_REQUEST['idUsuario'])) {
                    $uDAO = new UsuarioDAO();
                    $uDAO->deletarUsuario($_REQUEST['idUsuario']);
                    header('location:../controle/usuariocontrole.php?op=consultarUsuario');
                } else {
                    echo 'idUsuario não existe';
                }
           


        break;

        case 'logar':   
            if( isset($_POST['txtcpf']) &&
                isset($_POST['txtsenha'])){
                    $cont = 0;

                    if(!Validacao::testarCpf($_POST['txtcpf'])){
                        $cont++;
                    }

                    if(!Validacao::testarSenha($_POST['txtsenha'])){
                        $cont++;
                    }

                    if($cont == 0){
                        $cpf = Validacao::retirarEspacos($_POST['txtcpf']);
                        $cpf = Validacao::escaparAspas($cpf);

                        $senha = Validacao::retirarEspacos($_POST['txtsenha']);
                        $senha = Validacao::escaparAspas($senha);

                        $usuario = new Usuario();

                        
                        $usuario->cpf = $cpf;
                        $usuario->senha = $senha;
                        ControleLogin::logar($usuario);
                    }else{
                        $_SESSION['msg'] = 'Login/Senha inválidos!';
                        header('location:../visao/guirespostausuario.php');
                    }

                }else{
                    echo'Não existe txtlogin e/ou txtsenha!!';
                }
        break;

        case 'deslogar':
            ControleLogin::deslogar();
            break;
    
        // Mova o bloco fora do case 'deslogar'
        case 'buscarUsuario':
            if (isset($_POST['txtfiltro']) && isset($_POST['rdfiltro'])) {
                $erros = array();
    
                if (!Validacao::validarFiltro($_POST['txtfiltro'])) {
                    $erros[] = 'Dado Inválido!';
                }
    
                if (count($erros) == 0) {
                    $uDAO = new UsuarioDAO();
                    $usuario = array();
    
                    if ($_POST['rdfiltro'] == 'idusuario') {
                        $query = "WHERE idusuario = " . $_POST['txtfiltro'];
                    } else if ($_POST['rdfiltro'] == 'cpf') {
                        $query = "WHERE cpf = \"" . $_POST['txtfiltro'] . "\"";
                    } else if ($_POST['rdfiltro'] == 'partescpf') {
                        $query = "WHERE cpf LIKE '%" . $_POST['txtfiltro'] . "%'";
                    } else if ($_POST['rdfiltro'] == 'dtnasc') {
                        $query = "WHERE dtnasc = \"" . $_POST['txtfiltro'] . "\"";
                    } else if ($_POST['rdfiltro'] == 'nome') {
                        $query = "WHERE nome = \"" . $_POST['txtfiltro'] . "\"";
                    } else {
                        $query = "WHERE tipo = \"" . $_POST['txtfiltro'] . "\"";
                    }
                    
                    $usuario = $uDAO->buscar($query);
                    $_SESSION['usuario']=serialize($usuario);
                    header('location:../visao/guiconsultausuario.php');
                } else {
                    $_SESSION['erros'] = serialize($erros);
                    header('location:../visao/guierro.php');
                }
            } else {
                echo 'Variáveis não existem!';
            }
            break;

            case 'alterarUsuario':
                if (isset($_GET['idUsuario'])) {
                    $query = 'where idusuario = ' . $_GET['idUsuario'];
            
                    $uDAO = new UsuarioDAO();
                    $usuarios = array();
                    $usuarios = $uDAO->buscar($query);
            
                    $_SESSION['usuarios'] = serialize($usuarios);
                    header('location:../visao/guialterarUsuario.php');
                } else {
                    echo 'Não existem variáveis!';
                }
                break;        
            case 'confirmalterarUsuario':
                if (
                    isset($_POST['txtidusuario']) &&
                    isset($_POST['txtcpf']) &&
                    isset($_POST['txtsenha']) &&
                    isset($_POST['dtnasc']) &&
                    isset($_POST['seltipo'])
                ) {
            
                    // Recebendo os dados
                    $idusuario = $_POST['txtidusuario'];
                    $cpf = $_POST['txtcpf'];
                    $senha = $_POST['txtsenha'];
                    $dtnasc = $_POST['dtnasc'];
                    $tipo = $_POST['seltipo'];
            
                    $erros = array();
            
                    // Sua lógica de validação aqui...
            
                    if (count($erros) == 0) {
                        $u = new Usuario();
                        // Configurar os atributos do usuário conforme necessário
                        $u->idusuario = $idusuario;
                        $u->cpf = $cpf;
                        $u->senha = $senha;
                        $u->dtnasc = $dtnasc;
                        $u->tipo = $tipo;
            
                        $uDAO = new UsuarioDAO();
                        // Use o método correto para alterar o usuário
                        $uDAO->alterarUsuario($u);
            
                        $_SESSION['u'] = serialize($u);
            
                        header('location:../controle/usuariocontrole.php?op=consultarUsuario');
                    } else {
                        $_SESSION['erros'] = serialize($erros);
                        header("location:../visao/guierro.php");
                    }
                } else {
                    echo 'DEU RUIM!';
                }
                break;
            
    
            default:
                echo 'Erro no switch';
                break;
        }
    } else {
        echo 'Variável não existe';
    }
    ?>