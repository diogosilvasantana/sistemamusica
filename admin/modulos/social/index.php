<h2><i class="fa fa-users">&ensp;</i>REDES SOCIAIS</h2>

<!-- JAVASCRIPT -->
<script>
    $(function () {
        $(document).on("change", "#perfil", function(e) {
            showThumbnail(this.files);
        });

        function showThumbnail(files) {
            if (files && files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imagem').attr('src', e.target.result);
                }

                reader.readAsDataURL(files[0]);
            }
        }
    });
</script>



<script>


    var checkobj

    function agreesubmit(el){
        checkobj=el
        if (document.all||document.getElementById){
            for (i=0;i<checkobj.form.length;i++){ //hunt down submit button
                var tempobj=checkobj.form.elements[i]
                if(tempobj.type.toLowerCase()=="text"||tempobj.type.toLowerCase()=="radio")
                    tempobj.disabled=!checkobj.checked
            }
        }
    }

    function defaultagree(el){
        if (!document.all&&!document.getElementById){
            if (window.checkobj&&checkobj.checked)
                return true
            else{
                alert("Please read/accept terms to submit form")
                return false
            }
        }
    }

</script>


<!-- PHP CADASTRO -->





<!-- FORMULÁRIO -->



<div class="texto">

    <p>Algumas redes sociais exigem que seja gerado o TOKEN DE ACESSO. Ao lado de cada campo, clique em GERAR TOKEN para ser
        direcionado para a página de geração do token.</p>
    <h1>Para cadastrar suas Redes Sociais, marque a caixa para Habilitar os campos</h1>
</div>
<br/>
<div class="conteudo">
    <form method="post" onSubmit="return defaultagree(this)" class="tabela-cadastro" enctype="multipart/form-data" action="modulos/social/funcoes/cadastrar.php">
     <!-- FACEBOOK -->

        <fieldset>
            <table cellspacing="2" name="facebook_tb">
                <legend><input type="checkbox" id="facebook" onClick="agreesubmit(this)"/>&nbsp;<i class="fa fa-facebook-square fa-lg"></i> <span>&nbsp;Facebook</span></legend>
                <td>
                    <label for="Facebook"></i>&emsp;Usuário:&emsp;</label>
                </td>
                <td align="left">
                    <input type="text" id="facebook" name="facebook" placeholder="Link Facebook" class="caixa-cadastro" required disabled>
                </td>
                <td>
                    <label for="token_fb"><span>&emsp;Token:&emsp;</span> </label>
                </td>
                <td align="left">
                    <input type="text" name="token_fb" class="caixa-cadastro" required disabled>
                </td>
                <td>
                    <input type="submit" value="Gerar Token" onClick="return confirm('Tem certeza que deseja cadastrar o usuário informado?');" class="BotaoVermelho" name="token">
                </td>
                <td>
                    <input type="submit" value="Salvar" onClick="return confirm('Tem certeza que deseja cadastrar o usuário informado?');" class="BotaoAzul" name="salvar">
                </td>
            </table>
        </fieldset>
    </form>
    </br>

        <!-- INSTAGRAM -->



        <form method="post" onSubmit="return defaultagree(this)" class="tabela-cadastro" enctype="multipart/form-data" action="modulos/social/funcoes/cadastrar.php">
        <fieldset>
            <table cellspacing="2" name="instagram_tb">
                <legend><input type="checkbox" onClick="agreesubmit(this)"/>&nbsp;<i class="fa fa-instagram fa-lg"></i> <span>&nbsp;Instagram</span></legend>
                <td>
                    <label for="usuario_instagram"></i>&emsp;Usuário:&emsp;</label>
                </td>
                <td align="left">
                    <input type="text" name="instagram" placeholder="Usuário do Instagram" class="caixa-cadastro" required disabled>
                </td>
                <td>
                    <label for="token_instagram"><span>&emsp;Token:&emsp;</span> </label>
                </td>
                <td align="left">
                <!--    <input type="text" name="token_instagram" class="caixa-cadastro" value="<?php echo $_GET['access_token'] ; ?>"  disabled> -->
                </td>
                <td>
                    <a href="https://www.instagram.com/oauth/authorize/?client_id=6bb2e5f3621d4fb584cb973777d10c90&redirect_uri=http://localhost/login/admin/modulos/social/funcoes/token.php&response_type=token" value="gerar_token" class="BotaoVermelho" name="token">Gerar Token</a>
                </td>
                <td>
                    <input type="submit" value="Salvar" onClick="return confirm('Tem certeza que deseja cadastrar o usuário informado?');" class="BotaoAzul" name="salvar">
                </td>
            </table>
        </fieldset>
        </form>
        <br />

        <!-- TWITTER -->
<form method="post" onSubmit="return defaultagree(this)" class="tabela-cadastro" enctype="multipart/form-data" action="modulos/social/funcoes/cadastrar.php">
        <fieldset>
            <table cellspacing="2" name="twitter_tb">
                <legend><input type="checkbox" onClick="agreesubmit(this)"/>&nbsp;<i class="fa fa-twitter-square fa-lg"></i> <span>&nbsp;Twitter</span></legend>
                <td>
                    <label for="usuario_twitter"></i>&emsp;Usuário:&emsp;</label>
                </td>
                <td align="left">
                    <input type="text" name="twitter" placeholder="Usuário do Twitter" class="caixa-cadastro" required disabled>
                </td>
                                <td>
                    <input type="submit" value="Salvar" onClick="return confirm('Tem certeza que deseja cadastrar o usuário informado?');" class="BotaoAzul" name="salvar">
                </td>
            </table>
        </fieldset>
</form>
        <br />

        <!-- YOUTUBE -->
<form method="post" onSubmit="return defaultagree(this)" class="tabela-cadastro" enctype="multipart/form-data" action="modulos/social/funcoes/cadastrar.php">
        <fieldset>
            <table cellspacing="2" name="youtube_tb">
                <legend><input type="checkbox" onClick="agreesubmit(this)"/>&nbsp;<i class="fa fa-youtube-square fa-lg"></i> <span>&nbsp;Youtube</span></legend>
                <td>
                    <label for="usuario_youtube"></i>&emsp;Usuário:&emsp;</label>
                </td>
                <td align="left">
                    <input type="text" name="youtube" placeholder="Usuário do Youtube" class="caixa-cadastro" required disabled>
                </td>

                <td>
                    <input type="submit" value="Salvar" onClick="return confirm('Tem certeza que deseja cadastrar o usuário informado?');" class="BotaoAzul" name="salvar">
                </td>
            </table>
        </fieldset>
</form>
        <br />

        <!-- SNAPCHAT -->
<form method="post" onSubmit="return defaultagree(this)" class="tabela-cadastro" enctype="multipart/form-data" action="modulos/social/funcoes/cadastrar.php">
        <fieldset>
            <table cellspacing="2" name="snapchat_tb">
                <legend><input type="checkbox" onClick="agreesubmit(this)"/>&nbsp;<i class="fa fa-snapchat-square fa-lg"></i> <span>&nbsp;Snapchat</span></legend>


                <td>
                    <label for="usuario_snapchat"></i>&emsp;Usuário:&emsp;</label>
                </td>
                <td align="left">
                    <input type="text" name="snapchat" placeholder="Usuário do Snapchat" class="caixa-cadastro" required disabled>
                </td>

                <td>
                    <input type="submit" value="Salvar" onClick="return confirm('Tem certeza que deseja cadastrar o usuário informado?');" class="BotaoAzul" name="salvar">
                </td>
            </table>
        </fieldset>
</form>
</div>

