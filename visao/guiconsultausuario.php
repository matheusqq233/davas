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

<style>
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

</style>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Site de Noticias</a></h1>
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
                    <h2 class="title">Consulta</h2>
                    <p>
                        <?php
                        if (isset($_SESSION['usuario'])) {
                            include_once '../modelo/usuario.class.php';
                            $usu = array();
                            $usu = unserialize($_SESSION['usuario']);
                        ?>
                            <table summary="Tabela de usuários" border="1">
                                <caption>Notícias</caption>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>Senha</th>
                                        <th>DtNasc</th>
                                        <th>Tipo</th>
                                        <th>Ações</th> <!-- Adicionado coluna de ações -->
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>Senha</th>
                                        <th>DtNasc</th>
                                        <th>Tipo</th>
                                        <th>Ações</th>
                                    </tr>
                                </tfoot>

                                <tbody>
                                    <?php
                                    foreach ($usu as $u) {
                                        echo '<tr>';
                                        echo "<td>$u->idusuario</td>";
                                        echo '<td>' . $u->nome . '</td>';
                                        echo '<td>' . $u->cpf . '</td>';
                                        echo '<td>********</td>';
                                        echo '<td>' . $u->dtnasc . '</td>';
                                        echo '<td>' . $u->tipo . '</td>';
                                        echo '<td>';
                                        // Adicione links para deletar ou alterar
                                        echo "<a href='../controle/usuariocontrole.php?op=deletarUsuario&idUsuario=$u->idusuario'>Deletar</a> | ";
                                        echo "<a href='../visao/guialterarusuario.php?idUsuario=$u->idusuario&txtcpf=$u->cpf&txtsenha=********'>Alterar</a>";






                                        echo '</td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        <?php
                        } else {
                            echo '<p id="message">Variável "usuario" não existe!</p>';
                        }
                        ?>
                    </p>
                </div>
            </div>
            <!-- end #content -->
            
            
<h3>Funções do Usuário</h3>
<button class="menu-button" onclick="togglePrivateLinks()">
    &#x2261; <!-- Código HTML para o ícone de três traços -->
</button>

<!-- Lista de links privados -->
<ul id="privateLinks" style="display: none;">
    <!-- ... Suas opções de menu existentes ... -->
</ul>

<!-- Novas opções do menu -->
<ul id="menuOptions" class="menu-options" style="display: none;">
    <li><a href="controle/usuariocontrole.php?op=consultarUsuario">Consultar</a></li>
    <li><a href="visao/guidelusuario.php">Excluir</a></li>
    <li><a href="visao/guibuscausuario.php">Busca Avançada</a></li>
    <li><a href="controle/usuariocontrole.php?op=deslogar">Deslogar</a></li>
    <li><a href="visao/guialterarusuario.php">Alterar</a></li>
</ul>



<<h4>Menu da Notícia</h4>
<button class="menu-buttonnews" onclick="toggleNewsFunctions()">
    &#x2261; <!-- Código HTML para o ícone de três traços -->
</button>

<!-- Lista de links privados -->
<ul id="privateLinksNews" style="display: none;">
    <!-- ... Suas opções de menu existentes ... -->
</ul>

<!-- Novas opções do menu -->
<ul id="newsFunctions" class="menu-options" style="display: none;">
    <li><a href="#">Opção 1</a></li>
    <li><a href="#">Opção 2</a></li>
    <!-- Adicione mais opções conforme necessário -->
</ul>




                    
               <!-- InstanceEndEditable -->
            </div>
         </div>

         <!-- ... rest of your HTML code ... -->

      </div>
   </div>

   <!-- Your existing JavaScript at the end of the document -->
 

<script>
function togglePrivateLinks() {
    var privateLinks = document.getElementById('privateLinks');
    var menuOptions = document.getElementById('menuOptions');

    if (privateLinks.style.display === 'none' || privateLinks.style.display === '') {
        privateLinks.style.display = 'block';
        menuOptions.style.display = 'block'; // Mostra as opções do menu
    } else {
        privateLinks.style.display = 'none';
        menuOptions.style.display = 'none'; // Oculta as opções do menu
    }
}

</script>

<script>
function toggleNewsFunctions() {
    var privateLinksNews = document.getElementById('privateLinksNews');
    var newsFunctions = document.getElementById('newsFunctions');

    if (privateLinksNews.style.display === 'none' || privateLinksNews.style.display === '') {
        privateLinksNews.style.display = 'block';
        newsFunctions.style.display = 'block'; // Mostra as opções do menu de notícias
    } else {
        privateLinksNews.style.display = 'none';
        newsFunctions.style.display = 'none'; // Oculta as opções do menu de notícias
    }
}
</script>
            <div id="sidebar">
                <!-- Seu código de barra lateral aqui -->
            </div>
            <!-- end #sidebar -->
            <div style="clear: both;">&nbsp;</div>
        </div>
        <!-- end #page -->
    </div>
    <div id="footer">
        <!-- Seu código de rodapé aqui -->
    </div>
    <!-- end #footer -->
</body>

</html>