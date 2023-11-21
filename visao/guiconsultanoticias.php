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
<link href="../estilos/style.css" rel="stylesheet" type="text/css" media="screen" />
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

				<h2 class="title">Consulta</h2>
<p>
    <?php
    if (isset($_SESSION['noticia'])) {
        // Instantiate an object $usu as a Usuario
        include_once '../modelo/noticia.class.php';
        $not = array();
        $not = unserialize($_SESSION['noticia']);
        ?>
        <table summary="Tabela de noticias" border="1">
            <caption>Noticias</caption>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Titulo</th>
                    <th>Noticia</th>
                    <th>Data</th>
                    <th>Hora</th>
                </tr>
            </thead>

            <tfoot>
                <tr>
                    <th>Código</th>
                    <th>Titulo</th>
                    <th>Noticia</th>
                    <th>Data</th>
                    <th>Hora</th>
                </tr>
            </tfoot>

            <tbody>
                <?php
                foreach ($not as $n) {
                    echo '<tr>';

                    echo "<td>
                    <a href='../controle/usuariocontrole.php?op=alterar&idUsuario'> $n->idNoticia </a> </td>";

                    echo '<td>' . $n->titulo . '</td>';
                    echo '<td>' . $n->noticia . '</td>'; // You may want to display password securely
                    echo '<td>' . $n->data . '</td>';
                    echo '<td>' . $n->hora . '</td>';

                    echo '</tr>';
                } // closes the foreach
                ?>
            </tbody>
        </table>
        <?php
    } else {
        echo 'Variavel usuarios não existe!';
    }
    ?>
</p>


				<!-- InstanceEndEditable -->

			</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
		<?php
				if(!isset($_SESSION['privateUser'])){
			?>
			<form name="login" id="login" method="post" action="../controle/usuariocontrole.php?op=logar">
					<input type="text" name="txtlogin" id="txtlogin" placeholder="login"><br>
					<input type="password" name="txtsenha" id="txtsenha" placeholder="senha"><br>

					<input type="submit" name="btnlogar" id="btnlogar" value="Logar">
			</form>
			<?php
				}else{
			?>
						<ul>
							<li>
								<h2>Links Privados</h2>
								<ul>
									<li><a href="../controle/usuariocontrole.php?op=consultar">Consultar</a></li>
									<li><a href="guidelusuario.php">Excluir</a></li>
									<li><a href="guibuscausuario.php">Busca Avançada</a></li>
									<li><a href="../controle/usuariocontrole.php?op=deslogar">Deslogar</a></li>
									<li><a href="guialterar.php">Alterar</a></li>
								</ul>
							</li>
						</ul>
					<?php
				}

				    ?>
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
