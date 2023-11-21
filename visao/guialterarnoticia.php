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
			<div class="content"><img src="../imagens/img02.jpg" width="1000" height="300" alt="" /></div>
		</div>
	</div>
	<!-- end #header -->
	
	<div id="page">
		<div id="content">
        
		  <div class="post">
				<!-- InstanceBeginEditable name="conteúdo" -->

<h2 class="title">Alterar Usuario</h2>

<?php
if( isset($_SESSION['noticias'])){
    include_once '../modelo/usuario.class.php';
    $usu = array();
    $usu = unserialize($_SESSION['noticias']);
}
?>

<form action="../controle/usuariocontrole.php?op=confirmalterarnoticia" method="post" name="busca" id="busca">
    <fieldset>
        <legend>Alteração de Notícias</legend>
        <label>Código: <input type="text" name="txtidnoticia" id="txtidnoticia" value="<?php echo $not[0]->idNoticia; ?>">*</label><br>
        <label>Titulo: <input type="text" name="txttitulo" id="txttitulo" value="<?php echo $not[0]->titulo; ?>">*</label><br>
        <label>Data: <input type="date" name="txtdata" id="txtdata" value="<?php echo $not[0]->data; ?>">*</label><br>
        <label>Hora: <input type="time" name="txthora" id="txthora" value="<?php echo $not[0]->hora; ?>">*</label><br>
        <label>Tipo: 
            <select name="seltiponoticia" id="seltiponoticia">
                <?php
                foreach ($categorias as $categoria) {
                    echo '<option value="' . $categoria . '"';
                    if ($not[0]->categoria == $categoria) {
                        echo ' selected="selected"';
                    }
                    echo '>' . $categoria . '</option>';
                }
                ?>
            </select>
        </label><br>

        <input type="submit" name="btnalterar" id="btnalterar" value="Alterar">
        <input type="reset" name="btnlimpar" id="btnlimpar" value="Limpar">
    </fieldset>
</form>



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
