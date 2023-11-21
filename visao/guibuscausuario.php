<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Site de Noticias</title>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href="../estilos/esilo.css" rel="stylesheet" type="text/css" media="screen" />
    <style>
body {
    font-family: 'Abel', sans-serif;
    font-size: 16px;
    color: #333;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

#banner img {
    width: 100%;
    height: auto;
}

#content {
    width: 70%;
    margin: 20px auto;
}

.post {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
}

fieldset {
    border: 1px solid #ddd;
    padding: 10px;
    margin-top: 20px;
}

legend {
    font-size: 1.2em;
    font-weight: bold;
    color: #333;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"], input[type="radio"] {
    margin-bottom: 10px;
    padding: 8px;
    box-sizing: border-box;
    width: 100%;
}

/* Estilos dos botões */
.input-group {
    margin-top: 20px;
}

.input-group input {
    display: inline-block;
    background-color: #333;
    color: #fff;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    margin-right: 10px;
}

.input-group input:hover {
    background-color: #555;
}

body {
    font-family: 'Abel', sans-serif;
    font-size: 14px;
    line-height: 1.6em;
    color: #333;
    background-color: #fff;
    margin: 0; /* Removendo a margem padrão do body */
}

#header {
    overflow: hidden;
    position: relative;
    background-color: #FFE59A; /* Adicionando cor de fundo ao cabeçalho */
    color: #fff; /* Definindo a cor do texto no cabeçalho */
}

#logo {
    float: left;
    margin: 20px 0;
}

#logo a {
    margin-left: 30px;
    text-decoration: none;
    color: rgb(0, 0, 0);
    font-family: 'Oswald', sans-serif;
    font-size: 24px;
}

#menu {
    float: right;
    background-color: #FFE59A; /* Cor amarelo mais claro */
    margin-top: 20px; /* Ajustando a margem superior do menu */
}

#menu ul {
    margin-right: 20px;
    list-style: none;
    margin: 0;
    padding: 0;
}

#menu ul li {
    margin-top: 10px;
    display: inline-block; /* Alterando de "inline" para "inline-block" */
    margin-right: 10px; /* Adicionando espaçamento entre os itens */
    transition: transform 0.3s ease, color 0.3s ease; /* Adicionando transição suave para a mudança de cor e escala */
}

#menu ul li a {
    text-decoration: none;
    color: rgb(0, 0, 0); /* Mudando a cor do texto para contrastar com o fundo amarelo */
    font-weight: bold;
    font-size: 18px; /* Ajustando o tamanho do texto */
    display: block; /* Adicionando display block para cobrir a área do li */
    padding: 10px; /* Adicionando um espaçamento interno para melhorar a interação */
}

#menu ul li:hover {
    transform: scale(1.1); /* Aumentando a escala ao passar o mouse sobre o item */
}

#menu ul li:hover a {
    color: #ffffff; /* Mudando a cor do texto ao passar o mouse sobre o item */
    /* Mudando a cor de fundo ao passar o mouse sobre o item */
}

#page {
    position: relative; /* Adicionando posição relativa para acomodar o rodapé fixo */
    min-height: 100vh; /* Garantindo que o conteúdo ocupe pelo menos a altura da tela */
    z-index: 2; /* Ajustando o índice de camada para garantir que esteja acima do banner */
}


#banner {
    background-color: #fff;
    margin-top: -140px;
    text-align: center;
    background: url('img/LogoSample_ByTailorBrands.jpg') no-repeat center center fixed; 
    /* Definindo a imagem como fundo, centralizando e fixando a posição */
    background-size: cover; /* Cobrindo toda a área do elemento */
    /* Tornando o elemento banner ocupar toda a altura da tela */
    margin-left: 820px;
    position: fixed; /* Posicionando absolutamente para ficar sobre o conteúdo */
    z-index: 1; /* Colocando a imagem acima do conteúdo */
}

#footer {
    background: #FFE59A;
    color: rgb(0, 0, 0);
    text-align: center;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
    z-index: 3;
}

.thumbnail-container {
    display: flex;
    align-items: center;
}

.thumbnail-image {
    margin-left: 300px;
    width: 150%;
    max-width: 450px;
    height: auto;
    border-bottom: 4px solid #ffbf00;
    padding-bottom: 10px;
}

.text1 {
    padding-bottom: 30px;
    margin-left: 40px;
    margin-top: 40px;
    font-size: 16px;
}

.text2 {
    margin-left: 40px;
    margin-top: -200px;
    font-size: 20px;
    color: #facc44;
    font-weight: bold;
}

body {
    font-family: 'Abel', sans-serif;
    font-size: 14px;
    line-height: 1.6em;
    color: #333;
    background-color: #f2f2f2;
    margin: 0;
}

#header {
    overflow: hidden;
    position: relative;
    background-color: #FFE59A;
    color: #fff;
    padding: 20px 0;
}

#logo {
    float: left;
    margin: 0;
}

#logo a {
    text-decoration: none;
    color: rgb(0, 0, 0);
    font-family: 'Oswald', sans-serif;
    font-size: 24px;
}

#menu {
    float: right;
    background-color: #FFE59A;
    margin-top: 20px;
}

#menu ul {
    margin: 0;
    padding: 0;
}

#menu ul li {
    display: inline-block;
    margin-right: 20px;
    margin-top: 10px;
    transition: transform 0.3s ease, color 0.3s ease;
}

#menu ul li a {
    text-decoration: none;
    color: rgb(0, 0, 0);
    font-weight: bold;
    font-size: 18px;
    display: block;
    padding: 10px;
}

#menu ul li:hover {
    transform: scale(1.1);
}

#menu ul li:hover a {
    color: #ffffff;
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

#footer {
    background: #FFE59A;
    color: rgb(0, 0, 0);
    text-align: center;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
    z-index: 3;
}
/* Adicione este bloco de estilos ao seu arquivo CSS */
/* Adicione ou ajuste esses estilos no seu arquivo CSS */

/* ... outros estilos ... */

/* Estilo para o formulário de login */
form {
    max-width: 400px;
    margin: 0 auto;
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
                <div class="content">
                    <img src="img/LogoSample_ByTailorBrands.jpg" alt="" />
                </div>
            </div>
        </div>
        <div id="page">
            <div id="content">
                <div class="post">
                    <h2 class="title">Busca Avançada de Usuario</h2>
                    <form action="../controle/usuariocontrole.php?op=buscarUsuario" method="post" name="busca" id="busca">
                        <fieldset>
                            <legend>Busca Avançada de Usuario</legend>
                            <label for="txtfiltro">Digite a Busca:</label>
                            <input type="text" name="txtfiltro" id="txtfiltro" placeholder="Digite a Busca">
                            
                            <label><input type="radio" name="rdfiltro" id="idusuario" value="idusuario" checked="checked">Código</label>
							<label><input type="radio" name="rdfiltro" id="nome" value="nome">Nome</label>
                            <label><input type="radio" name="rdfiltro" id="cpf" value="CPF">CPF</label>
                            <label><input type="radio" name="rdfiltro" id="partescpf" value="partescpf">Partes do CPF</label>
                            <label><input type="radio" name="rdfiltro" id="dtnasc" value="DtNasc">Data de Nascimento</label>
                            <label><input type="radio" name="rdfiltro" id="seltipo" value="tipo">Tipo</label>

                            <input type="submit" name="btnbuscar" id="btnbuscar" value="Buscar">
                            <input type="reset" name="btnlimpar" id="btnlimpar" value="Limpar">
                        </fieldset>
                    </form>
                </div>
            </div>
            <div id="sidebar">
                <!-- Seu conteúdo de barra lateral aqui -->
            </div>
            <div style="clear: both;">&nbsp;</div>
        </div>
    </div>
    <div id="footer">
        <p>Copyright (c) 2012 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p>
    </div>
</body>
</html>
