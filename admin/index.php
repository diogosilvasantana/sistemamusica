<?php $painel_atual = "Administrador";

setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set('America/Sao_Paulo');

include "config/data.php";

?>

<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Painel [ADMINISTRADOR]</title>

    <!-- CSS -->

    <link rel="stylesheet" href="../css/admin.css" />
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/notificacoes.css" />
        <!-- BARRA DE ROLAGEM -->

    <style>
        ::-webkit-scrollbar {
            height:0px;
            width:0px;
            background: none;
            border: 1px solid #bgh;
        }
    </style>

    <!-- JAVASCRIPT -->

    <script type="text/javascript" src="../js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../js/notificacoes.js"></script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>


    <!-- ARQUIVO CONFIG.PHP -->

    <?php

    require "../config.php";

    ?>


</head>
<body>

<!-- CABEÇALHO -->

<div class="header">

    <!-- FORMULÁRIO DE PESQUISA -->

    <div class="pesquisar-header">
        <?php $imgBuscar = "<img src='../images/search.png' width='30px' height='30px'>";?>
        <form class="pesquisar" method="post" action="#">
            <?php echo $imgBuscar; ?><input type="search" placeholder="buscar" class="buscar"/>
        </form>
    </div>


    <div style="margin:0 auto;width:100%">
        <ul class="notificacoes_email">
            <li id="botao_logout"><a href="../logout.php"><i class="fa fa-power-off fa-2x"></i></a></li>
            <li id="notification_email">
                <span id="notification_count_email">10</span>
                <a href="#" id="notificationLink_email"><i class="fa fa-envelope fa-2x"></i></a>
                <div id="notificationContainer_email">
                    <div id="notificationTitle_email">Notificação de E-mail</div>
                    <div id="notificationsBody_email" class="notifications">
                        <span></span>
                    </div>
                    <div id="notificationFooter_email"><a href="index.php?id=email" target="content">Ver Todos</a></div>
                </div>
            </li>
        </ul>
        <div style="margin:0 auto;width:100%">
            <ul class="notificacoes_aviso">
                <li id="notification_aviso">
                    <span id="notification_count_aviso">2</span>
                    <a href="#" id="notificationLink_aviso"><i class="fa fa-exclamation-circle fa-2x"></i></a>
                    <div id="notificationContainer_aviso">
                        <div id="notificationTitle_aviso">Avisos</div>
                        <div id="notificationsBody_aviso" class="notifications">
                        </div>
                        <div id="notificationFooter_aviso"><a href="#">Ver Todos</a></div>
                    </div>
                </li>

            </ul>
        </div>
</div>
</div>


<!-- MENU -->

<div class="nav">

    <!-- MENU LATERAL -->


    <?php

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $result = mysqli_query($conexao, $sql);
    ?>


    <div class="menu-lateral">
        <div class="header-nav">
            <table class="tabela-usuario">
                <?php while($dado = $result->fetch_array()){ ?>
                <tr>
                    <td rowspan="4"><img src="../images/usuarios/<?php echo $dado['foto']; ?>"/></>
                    <td><div id="nome-usuario"><?php echo $dado["nome"]; ?></div></td>
                </tr>
                <tr>
                    <td><span><?php echo $dado["permissao"]; ?></span></td>
                </tr>
                <tr>
                    <td><span>Último Acesso:</span></td>
                </tr>
                <tr>

                    <?php $ultimo_login = " {$dia} " . $mes_extenso["$mes"] . "  " . date("H:i") ;?>

                    <td><span><i class="fa fa-calendar fa-3x">&nbsp;<?php echo $ultimo_login;?></span></td>
                </tr><?php } ?>
            </table>



        </div>
            <ul class="menu-1">
            <li><a href="index.php?id=home"><i class="fa fa-home fa-lg"></i>&emsp; Home</a></li>
            <li><a href="index.php?id=perfil" ><i class="fa fa-user-circle fa-lg"></i>&emsp; Perfil</a></li>
            <li><a href="index.php?id=usuarios"><i class="fa fa-user-plus fa-lg"></i>&emsp; Usuários</a></li>
            <li><a href="index.php?id=artista"><i class="fa fa-star fa-lg"></i>&emsp; Artista</a></li>
            <li><a href="index.php?id=email"><i class="fa fa-envelope fa-lg"></i>&emsp; E-mail</a></li>
            <li><a href="index.php?id=marketing"><i class="fa fa-line-chart fa-lg"></i>&emsp; Marketing</a></li>
            <li><a href="index.php?id=agenda"><i class="fa fa-calendar fa-lg"></i>&emsp; Agenda</a></li>
            <li><a href="index.php?id=social"><i class="fa fa-users fa-lg"></i>&emsp; Redes Sociais</a></li>
            <li><a href="index.php?id=fotos"><i class="fa fa-camera fa-lg"></i>&emsp; Galeria de Fotos</a></li>
            <li><a href="index.php?id=musicas"><i class="fa fa-music fa-lg"></i>&emsp; Músicas</a></li>
            <li><a href="index.php?id=videos"><i class="fa fa-video-camera fa-lg"></i>&emsp; Vídeos</a></li>
            <li><a href="index.php?id=historico-acessos"><i class="fa fa-history fa-lg"></i>&emsp; Histórico de Acessos</a></li>
            <li><a href="index.php?id=configuracoes"><i class="fa fa-cog fa-lg"></i>&emsp; Configurações</a></li>
                <br/><br/><br/><br/><br/><br/>
        </ul>
    </div>

    <!-- MENU RODAPÉ -->

    <div class="footer-nav">
        <ul class="menu-footer">
            <li><a href="index.php?id=perfil" class="tooltip"><i class="fa fa-user-circle fa-lg"></i><span>Perfil</span></a></li>
            <li><a href="index.php?id=configuracoes" class="tooltip"><i class="fa fa-cog fa-lg"></i><span>Configurações</span></a></li>
            <li><a href="../logout.php" class="tooltip"><i class="fa fa-power-off fa-lg"></i><span>Logout</span></a></li>
        </ul>
    </div>

</div>

<!-- CONTEÚDO -->

<div class="content">

    <div class="article">

    <?php require "config/paginas.php" ?>

    </div>
</div>
</body>
</html>