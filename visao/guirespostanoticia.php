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
<title>Site de Noticias</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="../estilos/estilo.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Site de Noticias </a></h1>
			</div>
			<div id="menu">
			<?php
				if(!isset($_SESSION['privateUser'])){
			?>
			<form name="login" id="login" method="post" action="../controle/usuariocontrole.php?op=logar">
					<input type="text" name="txtcpf" id="txtcpf" placeholder="login"><br>
					<input type="password" name="txtsenha" id="txtsenha" placeholder="senha"><br>

					<input type="submit" name="btnlogar" id="btnlogar" value="Logar">
					<input type="reset" name="btnlimpar" id="btnlimpar" value="Limpar">
			</form>
			<?php
				}else{
			?>
						<ul>
							<li>
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
							</li>
						</ul>
					<?php
				}

				    ?>
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

				<h2 class="title">Resposta</h2>
<p>
    <?php
    if (isset($_SESSION['msg'])) {
         echo $_SESSION['msg'];

    } else if (isset($_SESSION['u'])) {
        // Successfully registered a user
        include '../modelo/usuario.class.php';
        $usu = new Usuario();
        $usu = unserialize($_SESSION['u']);
        echo 'O usuário ' . $usu->login . ' foi cadastrado com sucesso!';
    } else {
        echo 'Variável de sessão não encontrada!';
    }
    ?>
</p>




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
