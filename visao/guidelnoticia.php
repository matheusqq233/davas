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
<link href="../estilos/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Cadastro </a></h1>
			</div>
			<div id="menu">
				<ul>
                <li><a href="../controle/usuariocontrole.php?op=consultarusuario">Consultar Usuarios</a></li>
									<li><a href="guidelusuario.php">Excluir Usuarios</a></li>
									<li><a href="guibuscausuario.php">Busca Avançada de Usuarios</a></li>
									<li><a href="guialterarusuario.php">Alterar Usuarios</a></li>

                                    <li class="current_page_item"><a href="../index.php">Homepage</a></li>

                                    <li><a href="../controle/usuariocontrole.php?op=consultarnoticias">Consultar Noticias</a></li>
									<li><a href="guidelnoticias.php">Excluir Noticias</a></li>
									<li><a href="guibuscanoticias.php">Busca Avançada de Usuarios</a></li>	
									<li><a href="guialterarnoticias.php">Alterar Usuarios</a></li>                    
				
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

<h2 class="title">Exclusão de Noticias</h2>
<form action="../controle/usuariocontrole.php?op=deletarnoticia" method="post" name="exc" id="exc">
    <fieldset><legend>Excluir Noticia</legend>
        <label>Digite o código:
            <input type="text" name="idNoticia" id="idNoticia"> * </label> <br>

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
