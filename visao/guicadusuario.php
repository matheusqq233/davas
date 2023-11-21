<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="Templates/modelo.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Cadastro do Usuário</title>
    <link href='//fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href="../estilos/estilo.css" rel="stylesheet" type="text/css" media="screen" />
    <style>
        /* Adicionei um estilo para ocultar a senha por padrão */
        .password-wrapper {
            position: relative;
        }

        #showPasswordBtn {
            margin-top: -8px;
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 18px;
        }

        /* Estilo para o formulário de login */
        form {
    max-width: 500px;
    margin: 0 auto;
    margin-left: 660px; /* Adicione esta linha para definir a margem esquerda */
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s ease;
        }

        form input[type="password"],
        form input[type="text"] {
            border-color: #ddd;
        }

        form input[type="password"]:focus,
        form input[type="text"]:focus {
            border-color: #3498db;
        }

        form input[type="submit"],
        form input[type="reset"] {
            background-color: #FFE59A; /* Cor igual à do menunav */
            color: #333; /* Cor do texto */
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover,
        form input[type="reset"]:hover {
            background-color: #facc44; /* Cor ao passar o mouse, ajuste conforme necessário */
        }

        .post p {
            
            margin-left: 300px;
            font-family: 'Abel', sans-serif;
            font-size: 18px;
            line-height: 1.6;
            color: #666; /* Change the color to your preference */
            margin-bottom: 20px;
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
            color: #fff; /* Change the text color to your preference */
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
    right:50px;
    margin-top:90px;
    margin-left: -60px; /* Adicione esta linha para definir a margem esquerda */
    text-align: center;
    font-family: 'Oswald', sans-serif;
    font-size: 42px;
    color: #FFE59A;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    margin-bottom: 40px;
}
        

    </style>
</head>
<body>
    <div id="wrapper">
        <div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <h1><a href="#">CADASTRO</a></h1>
                </div>
                <div id="menu">
                    <ul>
                        <li class="current_page_item"><a href="../index.php">Homepage</a></li>
                        <li><a href="guicadusuario.php">Cadastro</a></li>
                        <li><a href="guiloginusuario.php">Login</a></li>
                    </ul>
                </div>
            </div>
            <div id="banner">
            <div class="content">
                <img src="../img/LogoSample_ByTailorBrands.jpg" alt="" />
            </div>
        </div>
    </div>
        <!-- end #header -->
        
        <div id="page">
            <div id="content">
                
                <div class="post">
                    <!-- InstanceBeginEditable name="conteúdo" -->
                    <h2 class="title">Cadastro de Usuário</h2>
                    <form action="../controle/usuariocontrole.php?op=cadastrarusuario" method="post" name="cadu">
                        <fieldset>
                            <legend>Cadastro</legend>
                            <div class="input-container">
                                <label for="txtnome">Nome:</label>
                                <input type="text" name="txtnome" id="txtnome" placeholder="Nome" required>
                            </div>
                            <div class="input-container">
                                <label for="txtcpf">CPF:</label>
                                <input type="text" name="txtcpf" id="txtcpf" placeholder="CPF" oninput="formatCPF(this)" required>
                                <!-- Add the JavaScript function to handle CPF formatting -->
                                <script>
                                    function formatCPF(input) {
                                        // Remove non-numeric characters from the input value
                                        var cpf = input.value.replace(/\D/g, '');

                                        // Format the CPF with dots and dashes
                                        if (cpf.length >= 3) {
                                            cpf = cpf.substring(0, 3) + '.' + cpf.substring(3);
                                        }

                                        if (cpf.length >= 7) {
                                            cpf = cpf.substring(0, 7) + '.' + cpf.substring(7);
                                        }

                                        if (cpf.length >= 11) {
                                            cpf = cpf.substring(0, 11) + '-' + cpf.substring(11);
                                        }

                                        // Update the input value with the formatted CPF
                                        input.value = cpf;
                                    }
                                </script>
                            </div>
                            <div class="input-container">
                                <label for="txtsenha">Senha:</label>
                                <div class="password-wrapper">
                                    <input type="password" name="txtsenha" id="txtsenha" placeholder="Senha" required>
                                    <span id="showPasswordBtn" onclick="togglePasswordVisibility()">👁️</span>
                                </div>
                            </div>
                            <div class="input-container">
                                <label for="dtnasc">Data de Nascimento:</label>
                                <input type="date" name="dtnasc" id="dtnasc" placeholder="Data de Nascimento" required>
                            </div>
                            <div class="input-container">
                                <label for="seltipo">Sexo:</label>
                                <select name="seltipo" id="seltipo" required>
                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>
                                    <option value="PF">Prefiro não responder</option>
                                </select>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>Ações</legend>
                            <input type="submit" name="btncadastrar" id="btncadastrar" value="Cadastrar">
                            <input type="reset" name="btnlimpar" id="btnlimpar" value="Limpar">
                        </fieldset>
                    </form>
                    <!-- InstanceEndEditable -->
                </div>
            </div>
            <!-- end #content -->
            <div id="sidebar"></div>
            <!-- end #sidebar -->
            <div style="clear: both;">&nbsp;</div>
        </div>
        <!-- end #page --> 
    </div>
    <div id="footer">
    <p>Copyright (c)
    </div>
    <!-- end #footer -->

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('txtsenha');
            var showPasswordBtn = document.getElementById('showPasswordBtn');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                showPasswordBtn.textContent = '👁️';
            } else {
                passwordInput.type = 'password';
                showPasswordBtn.textContent = '👁️';
            }
        }
    </script>

</body>
<!-- InstanceEnd --></html>

