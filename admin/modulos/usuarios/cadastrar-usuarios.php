<h2><i class="fa fa-user-plus">&ensp;</i>CADASTRO DE USUÁRIOS</h2>

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


<!-- PHP CADASTRO -->





<!-- FORMULÁRIO -->


    <form method="post" class="tabela-cadastro" enctype="multipart/form-data" action="modulos/usuarios/funcoes/cadastrar.php">
    <fieldset>
        <legend>Dados Pessoais</legend>
        <table cellspacing="10">
                <td>
                    <label for="nome">Nome: </label>
                </td>
                <td align="left">
                    <input type="text" name="nome" placeholder="Digite aqui seu nome" class="caixa-cadastro" required>
                </td>
                    <td rowspan="4" class="imagem"><img id="imagem" width="180" height="180" /><a href="#"></a></td>
                <tr>
                <td>
                    <label for="email">E-mail: </label>
                </td>
                <td align="left">
                    <input type="text" name="email" class="caixa-cadastro" placeholder="Digite seu e-mail" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="login">Login de Usuário: </label>
                </td>
                <td align="left">
                    <input type="text" name="usuario" placeholder="Digite um usuário" class="caixa-cadastro" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pass">Senha: </label>
                </td>
                <td align="left">
                    <input type="password" name="senha" placeholder="Digite uma senha" class="caixa-cadastro" required>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="permissao">Permissão: </label>
                </td>
                <td align="left">
                    <select class="caixa-cadastro-select" name="permissao" required>
                        <option value="">Selecione uma Opção...</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Usuario">Usuário</option>
                        <option value="Webmaster">Webmaster</option>
                    </select>
                </td>
                <td>
                    <input type="file" name="foto" id="perfil" class="upload-usuario" required/>
                </td>

            </tr>

        </table>
    </fieldset>


    <br />
    <input type="submit" onClick="return confirm('Tem certeza que deseja cadastrar o usuário informado?');" class="BotaoAzul" name="cadastrar">
    <input type="reset" value="Limpar" class="BotaoLimpar">
    </form>

