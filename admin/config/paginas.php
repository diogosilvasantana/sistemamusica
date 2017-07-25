<?php

    /* CONTEÚDO */

if($_GET['id']=="home"){

    require("principal.php");



    /* PERFIL */

} elseif($_GET['id']=="perfil"){

    require("modulos/perfil/index.php");

} elseif($_GET['id']=="editar-perfil"){

    require("modulos/perfil/editar-perfil.php");

} elseif($_GET['id']=="alterar-senha"){

    require("modulos/perfil/alterar-senha.php");



    /* USUÁRIOS */

} elseif($_GET['id']=="usuarios"){

    require("modulos/usuarios/index.php");

} elseif($_GET['id']=="listar-usuarios"){

    require("modulos/usuarios/listar-usuarios.php");

} elseif($_GET['id']=="cadastrar-usuarios"){

    require("modulos/usuarios/cadastrar-usuarios.php");

} elseif($_GET['id']=="editar-usuario"){

    require("modulos/usuarios/editar-usuarios.php");

} elseif($_GET['id']=="apagar-usuario"){

    require("modulos/usuarios/funcoes/deletar.php");




    /* E-MAIL */

} elseif($_GET['id']=="email") {

    require("modulos/email/index.php");

} elseif($_GET['id']=="configuracoes-email"){

    require("modulos/email/configuracoes-email.php");

} elseif($_GET['id']=="caixa-entrada"){

    require("modulos/email/caixa-entrada.php");



    /* ARTISTAS */

}elseif($_GET['id']=="artista"){

    require("modulos/artista/index.php");

}elseif($_GET['id']=="release"){

    require("modulos/artista/release.php");

}elseif($_GET['id']=="material-contratante"){

    require("modulos/artista/material-contratantes.php");

}elseif($_GET['id']=="informacoes-contato"){

    require("modulos/artista/informacoes-contato.php");



    /* MARKETING */

}elseif($_GET['id']=="marketing"){

    require("modulos/marketing/index.php");

}elseif($_GET['id']=="emailmkt"){

    require("modulos/marketing/email-marketing.php");

}elseif($_GET['id']=="faclubes"){

    require("modulos/marketing/fa-clubes.php");

}elseif($_GET['id']=="newsletter"){

    require("modulos/marketing/newsletter.php");

}elseif($_GET['id']=="config-emailmkt"){

    require("modulos/marketing/configuracoes-emailmkt.php");



    /* AGENDA */

}elseif($_GET['id']=="agenda"){

    require("modulos/agenda/index.php");

}elseif($_GET['id']=="inserir-data"){

    require("modulos/agenda/inserir-data.php");

}elseif($_GET['id']=="agenda-shows"){

    require("modulos/agenda/agenda-shows.php");



    /* SOCIAL */

}elseif($_GET['id']=="social"){

    require("modulos/social/index.php");



    /* FOTOS */

}elseif($_GET['id']=="fotos"){

    require("modulos/fotos/index.php");

}elseif($_GET['id']=="novo-album"){

    require("modulos/fotos/novo-album.php");

}elseif($_GET['id']=="album-fotos"){

    require("modulos/fotos/album-fotos.php");


    /* MUSICAS */

}
elseif($_GET['id']=="musicas"){

    require("modulos/musicas/index.php");



    /* VÍDEOS */

}elseif($_GET['id']=="videos"){

    require("modulos/videos/index.php");



    /* CONFIGURAÇÕES */

}elseif($_GET['id']=="configuracoes") {

    require("modulos/configuracoes/index.php");

}elseif($_GET['id']=="historico-acessos") {

require("modulos/historico/index.php");
}
?>