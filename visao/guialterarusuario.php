<?php
session_start();

if (isset($_GET['idUsuario']) && isset($_GET['txtcpf'])) {
    $idUsuario = $_GET['idUsuario'];
    $cpf = $_GET['txtcpf'];

    // Aqui você deve obter os dados do usuário com o ID e CPF especificados
    // Certifique-se de definir $usuarioParaAlterar corretamente antes de usá-lo
    // $usuarioParaAlterar = obterUsuarioPorIdECPF($idUsuario, $cpf);

    $senha = '*'; // Valor fixo de oito asteriscos
} else {
    // Se o ID do usuário ou CPF não estiver presente, redirecione para a página de consulta
    header("Location: ../controle/usuariocontrole.php?op=consultarUsuario");
    exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="Templates/modelo.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Site de Noticias</title>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href="../estilos/estilo.css" rel="stylesheet" type="text/css" media="screen" />
    <style>
        /* Adicione estilos CSS personalizados aqui */

        /* Estilos removidos */
        h5 {
            position: relative;
            font-size: 56px;
            margin-top: -56px;
            margin-left: 1105px;
            margin-bottom: 10px;
        }

        .thumbnail-container {
            position: relative;
        }

        .thumbnail-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }

        .text1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .text2 {
            font-size: 18px;
        }

        .title {
            text-align: center;
            font-family: 'Oswald', sans-serif;
            font-size: 42px;
            color: #FFE59A;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 40px;
        }

        button {
            position: absolute;
            margin-left: 1338px;
            margin-top: -59px;
            background: none;
            border: none;
            font-size: 40px;
            color: #333;
            cursor: pointer;
            margin-bottom: -40px;
        }

        button:hover {
            color: #facc44;
        }

        .menu-options {
            display: none;
            position: absolute;
            background-color: #333;
            color: #fff;
            list-style: none;
            padding: 10px;
            margin: 0;
            margin-left: 1250px;
            margin-top: 50px;
        }

        .menu-options li {
            margin-bottom: 5px;
        }

        .menu-options a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
        }

        .menu-options a:hover {
            text-decoration: underline;
        }

        h3 {
            position: relative;
            margin-left: 750px;
            margin-top: -1568px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            text-align: center;
        }

        h4 {
            margin-left: 1340px;
            margin-top: -69px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            text-align: center;
        }

        #page {
            position: relative;
            min-height: 100vh;
            z-index: 2;
        }

        #banner {
            margin-top: -140px;
            text-align: center;
            background: url('img/LogoSample_ByTailorBrands.jpg') no-repeat center center fixed;
            background-size: cover;
            margin-left: 820px;
            position: fixed;
            z-index: 1;
        }

        #newsFunctions {
            display: none;
            position: absolute;
            background-color: #333;
            color: #fff;
            list-style: none;
            padding: 10px;
            margin: 0;
            margin-left: 1150px;
            margin-top: 50px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        #newsFunctions li {
            margin-bottom: 8px;
        }

        #newsFunctions a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            display: block;
            padding: 5px 0;
        }

        #newsFunctions a:hover {
            text-decoration: underline;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .menu-buttonnews {
            position: absolute;
            margin-left: 1621px;
            margin-top: -69px;
            background: none;
            border: none;
            font-size: 40px;
            color: #333;
            cursor: pointer;
            margin-bottom: -40px;
            z-index: 2;
        }

        .menu-buttonnews:hover {
            color: #facc44;
        }

        body {
            font-family: 'Abel', sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
            color: #333;
        }

        #content {
            width: 70%;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            min-height: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tfoot {
            background-color: #333;
            color: #fff;
        }

        caption {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        #message {
            margin-top: 20px;
            padding: 10px;
            background-color: #f2dede;
            border: 1px solid #ebccd1;
            color: #a94442;
            border-radius: 5px;
        }

        fieldset {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
            max-width: 400px; /* Ajuste conforme necessário */
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <h1><a href="#">Site de Noticias</a></h1>
                </div>
                <div id="menu">
                    <ul>
                        <!-- Seus itens de menu aqui -->
                    </ul>
                </div>
            </div>
            <div id="banner">
            <img src="../img/LogoSample_ByTailorBrands.jpg" alt="" />
            </div>
        </div>
        <!-- end #header -->

        <div id="page">
            <div id="content">
                <div class="post">
                    <!-- InstanceBeginEditable name="conteúdo" -->

                    <h2 class="title">Alterar Usuário</h2>

                    <?php
                    
                    if (isset($_SESSION['usuarios'])) {
                        include_once '../modelo/usuario.class.php';
                        $usu = array();
                        $usu = unserialize($_SESSION['usuarios']);

                        // Inicialize as variáveis com os valores dos campos
                        $idusuario = $usu[0]->idusuario;
                        $cpf = $usu[0]->cpf;
                        $senha = ''; // Adicione a senha se necessário
                        $dtnasc = $usu[0]->dtnasc;
                        $tipo = $usu[0]->tipo;
                    }
                    ?>

                    <form action="../controle/usuariocontrole.php?op=confirmalterarUsuario" method="post" name="busca" id="busca">
                        <fieldset>
                            <legend>Alteração de Usuários</legend>
                            <label>Código: <input type="text" name="txtidusuario" id="txtidusuario" value="<?php echo isset($idUsuario) ? $idUsuario : ''; ?>" required /></label>
                            <label>CPF: <input type="text" name="txtcpf" id="txtcpf" value="<?php echo isset($cpf) ? $cpf : ''; ?>" required /></label>
                            <label>Senha: <input type="text" name="txtsenha" id="txtsenha" value="<?php echo isset($senha) ? $senha : ''; ?>" required /></label>
                            <label>Data de Nascimento: <input type="date" name="dtnasc" id="dtnasc" value="<?php echo $dtnasc; ?>" /></label>
                            <label>Tipo:
                                <select name="seltipo" id="seltipo">
                                    <?php
                                    if (isset($usu[0]->tipo)) {
                                        $selectedMasculino = ($usu[0]->tipo == 'M') ? 'selected' : '';
                                        $selectedFeminino = ($usu[0]->tipo == 'F') ? 'selected' : '';
                                        $selectedPrefiroNaoResponder = ($usu[0]->tipo == 'PF') ? 'selected' : '';

                                        echo "<option value='M' $selectedMasculino>Masculino</option>";
                                        echo "<option value='F' $selectedFeminino>Feminino</option>";
                                        echo "<option value='PF' $selectedPrefiroNaoResponder>Prefiro não Responder</option>";
                                    } else {
                                        // Se $usu[0]->tipo não estiver definido, adicione opções padrão ou manipule conforme necessário
                                        echo '<option value="M">Masculino</option>';
                                        echo '<option value="F">Feminino</option>';
                                        echo '<option value="PF">Prefiro não Responder</option>';
                                    }
                                    unset($_SESSION['usuarios']);
                                    ?>
                                </select>
                            </label>
                            <input type="submit" name="btnalterar" id="btnalterar" value="Alterar">
                            <input type="reset" name="btnlimpar" id="btnlimpar" value="Limpar">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <p>Copyright (c) 2012 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p>
    </div>
</body>
<!-- InstanceEnd --></html>
