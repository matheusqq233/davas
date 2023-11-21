<?php
session_start();
include_once '../util/controlelogin.class.php';
ControleLogin::verificarAcesso();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Keyboard 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120915

-->
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="Templates/modelo.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Aula013 Cadastro, Busca, Excluir e Alterar</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="../estilos/estilo.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<style>
	/* Adicione este bloco de estilo no seu arquivo CSS (por exemplo, style.css) */

body {
    font-family: 'Abel', sans-serif;
    font-size: 16px;
    color: #333;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}



#content {
    width: 60%; /* Ajuste a largura conforme necessário */
    margin: 20px auto; /* Adicionado 'auto' para centralizar horizontalmente */
}
.post {
	top:240px;
    background-color: #fff;
    padding: 90px;
    border: 1px solid #ddd;
    width: 90%; /* Ajuste a largura conforme necessário */
    margin: 1 auto; /* Adicionado 'auto' para centralizar horizontalmente */
	height:90%;
}


fieldset {
    border: 1px solid #ddd;
    padding: 10px;
    margin-top: 40px;
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

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

input[type="submit"], input[type="reset"] {
    background-color: #333;
    color: #fff;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover, input[type="reset"]:hover {
    background-color: #555;
}


</style>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Cadastro </a></h1>
			</div>
			<div id="menu">
				<ul>
                          
				
				</ul>
			</div>
		</div>
		<div id="banner">
		<div class="content">
                <img src="img/LogoSample_ByTailorBrands.jpg" alt="" />
            </div>
		</div>
	</div>
	<!-- end #header -->
	
	<div id="page">
		<div id="content">
        
		  <div class="post">
				<!-- InstanceBeginEditable name="conteúdo" -->

<h2 class="title">Exclusão de usuário</h2>
<form action="../controle/usuariocontrole.php?op=deletarUsuario" method="post" name="exc" id="exc">
    <fieldset><legend>Excluir Usuario</legend>
	<label>Digite o código:
    <input type="text" name="idUsuario" id="idUsuario" pattern="\d+" title="Digite apenas números" required>
</label> <br>


            <input type="submit" name="btnExcluir" id="btnExcluir" value="Excluir">
            <input type="reset" name="btnLimpar" id="btnLimpar" value="Limpar">
    </fieldset>
</form>

				<!-- InstanceEndEditable -->

			</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
	
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page --> 
</div>
<div id="footer">
	<p>Copyright (c) 2012 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p>
</div>
<!-- end #footer -->
</body>
<!-- InstanceEnd --></html>
