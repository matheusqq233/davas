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
<title>Aula013 Cadastro, Busca, Excluir e Alterar</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="../estilos/estilo.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

<style>
	/* Adicione ou ajuste esses estilos no seu arquivo CSS */

/* Adicionando estilos para mensagens de erro */
.error-container {

	background-color: #FFE59A; /* Cor de fundo para mensagens de erro */
    border: 1px solid #cc0000; /* Cor da borda para mensagens de erro */
    color: #cc0000; /* Cor do texto para mensagens de erro */
    padding: 10px;
    border-radius: 5px; /* Borda arredondada para mensagens de erro */
    margin-top: 250px;
}

.error-container p {
    margin: 0; /* Removendo margem padrão para o conteúdo da mensagem de erro */
}

/* Adicionando estilo ao título de erro */
.error-container h2.title {
    color: #cc0000; /* Cor do título de erro */
}

</style>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Site Exemplo </a></h1>
			</div>
			<div id="menu">
				<ul>
				<li class="current_page_item"><a href="../index.php">Homepage</a></li>
					<li><a href="guicadusuario.php">Cadastro do Usuário</a></li>
					<li><a href="guiloginusuario.php">Login do Usuário</a></li>
				
				
					
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

				<div class="error-container">
        <h2 class="title">Erro</h2>
        <p>
            <?php
            if (isset($_SESSION['erros'])) {
                $erros = array();
                $erros = unserialize($_SESSION['erros']);
                foreach ($erros as $e) {
                    echo '<br>' . $e;
                }
            } else {
                echo 'Deu pau!';
            }
            ?>
        </p>
    </div>
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
