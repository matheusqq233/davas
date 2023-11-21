<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="Templates/modelo.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Site de Noticias</title>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="estilos/estilo.css" />
    <link rel="stylesheet" type="text/css" href="estilos/menunav.css" />


</head>
<body>
    <div id="wrapper">
        <div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <h1><a href="#">PÁGINA INICIAL</a></h1>
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
  
        <h5>Funções do Usuário</h5>

                <!-- ... Conteúdo adicional ... -->
           <?php
if (isset($_SESSION['privateUser'])) {
    include_once 'modelo/usuario.class.php';
    $usu = new Usuario();
    $usu = unserialize($_SESSION['privateUser']);
    echo '<p>Olá, ' . $usu->nome . '<br>' .
        'Seja Bem Vindo!!!</p>' .
        'Agora você pode cadastrar suas noticias!!!';
    ?>

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
    <a href='visao/guialterarusuario.php?idUsuario=*&txtcpf=*&txtsenha=********'>Alterar</a>



</ul>

<?php
				}

				    ?>

<h4>Menu da Notícia</h4>
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

            </div>
            <!-- end #content -->

            <div id="sidebar">
                <!-- ... Conteúdo da barra lateral ... -->
            </div>
            <!-- end #sidebar -->

            <div style="clear: both;">&nbsp;</div>
        </div>
        <!-- end #page -->
    </div>
    <!-- end #wrapper -->

    <div id="footer">
        <p>Copyright (c)</p>
    </div>
    <!-- end #footer -->

</body>
<!-- InstanceEnd --></html>
