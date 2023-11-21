<?php
session_start();
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
<title>Cadastro do Usuario</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="../estilos/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Cadastro</a></h1>
			</div>
			<div id="menu">
				<ul>
                                   
                                    <li><a href="../controle/usuariocontrole.php?op=consultarUsuario">Consultar Usuarios</a></li>
									<li><a href="guidelUsuario.php">Excluir Usuarios</a></li>
									<li><a href="guibuscaUsuario.php">Busca Avançada de Usuarios</a></li>
									<li><a href="guialterarUsuario.php">Alterar Usuarios</a></li>

                                    <li class="current_page_item"><a href="../index.php">Homepage</a></li>

                                    <li><a href="../controle/usuariocontrole.php?op=consultarNoticias">Consultar Noticias</a></li>
									<li><a href="guidelNoticias.php">Excluir Noticias</a></li>
									<li><a href="guibuscaNoticias.php">Busca Avançada de Usuarios</a></li>	
									<li><a href="guialterarNoticias.php">Alterar Usuarios</a></li>                    
					
					
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

<h2 class="title">Cadastro de Noticias</h2>
<form action="../controle/noticiacontrole.php?op=cadastrar" method="post" name="formcad">
<fieldset><legend>Noticias</legend>
			<input type="text" name="txttitulo" id="txttitulo" placeholder="titulo"> <br><br>
            <textarea name="txtnoticia" id="txtnoticia" rows="1" cols="40" placeholder="Adcione sua noticia aqui"></textarea><br><br>
			<input type="date" name="txtdata" id="txtdata" placeholder="data"> <br><br>
			<input type="time" name="txthora" id="txthora" placeholder="hora"> <br><br>
			<label>Tipo da Noticia</label>
		<select name="seltiponoticia" id="seltiponoticia">
			<option value="Esportes">Esportes</option>
			<option value="Economia">Economia</option>
			<option value="Nacional">Nacional</option>
			<option value="POP">POP</option>
			<option value="Viagem & Gastronomia">Viagem & Gastronomia</option>
			<option value="Tecnologia">Tecnologia</option>
			<option value="Politica">Politica</option>
			<option value="Internacional">Internacional</option>
			<option value="Saúde">Saúde</option>
			<option value="Lifestyle">Politica</option>
			<option value="Programas">Programas</option>
			<option value="Outros">Outros</option>
		</select>
		<br><br>

    
        <input type="submit" name="btncadastrar" id="btncadastrar" value="Cadastrar">
        <input type="reset" name="btnlimpar" id="btnlimpar" value="Limpar">
    </fieldset>

</form>


				<!-- InstanceEndEditable -->

			</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
                
			</ul>
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
