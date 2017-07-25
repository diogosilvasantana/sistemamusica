<?php $painel_atual = "Usuario"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel [ADMINISTRADOR]</title>
    <style>
        ::-webkit-scrollbar {
            height:0px;
            width:0px;
            background: none;
            border: 1px solid #bgh;
        }
    </style>
    <link rel="stylesheet" href="../css/admin.css" />
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css" />
    <?php require "../config.php"; ?>

</head>
<body>

<div class="header">

</div>

<div class="nav">
    <!--
    <div class="foto-usuario">

        </div> -->

    <div class="menu-lateral">
        <h4>Menu Inicial</h4>
        <ul class="menu-1">
            <li><a href="#" class="active"><i class="fa fa-home fa-lg"></i>&emsp; Home</a></li>
            <li><a href="#"><i class="fa fa-user-circle fa-lg"></i>&emsp; Perfil</a></li>
            <li><a href="#"><i class="fa fa-star fa-lg"></i>&emsp; Artista</a></li>
            <li><a href="#"><i class="fa fa-calendar fa-lg"></i>&emsp; Agenda</a></li>
            <li><a href="#"><i class="fa fa-users fa-lg"></i>&emsp; Redes Sociais</a></li>
            <li><a href="#"><i class="fa fa-camera fa-lg"></i>&emsp; Galeria de Fotos</a></li>
            <li><a href="#"><i class="fa fa-music fa-lg"></i>&emsp; Músicas</a></li>
            <li><a href="#"><i class="fa fa-video-camera fa-lg"></i>&emsp; Vídeos</a></li>

            <div class="space">
                <p></p>
            </div>
        </ul>

    </div>

    <div class="footer-nav">
        <ul class="menu-footer">
            <li><a href="#" class="tooltip"><i class="fa fa-user-circle fa-lg"></i><span>Perfil</span></a></li>
            <li><a href="../logout.php" class="tooltip"><i class="fa fa-power-off fa-lg"></i><span>Logout</span></a></li>
        </ul>

    </div>

</div>

<div class="content">


    <div class="article">
        <section></section>
    </div>
</div>




</body>
</html>