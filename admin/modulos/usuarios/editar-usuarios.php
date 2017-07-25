<h2>EDITAR USUÁRIOS</h2>

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

<?php

$sql = ("SELECT * FROM usuarios");
$result = mysqli_query($conexao, $sql);
?>



<!-- FORMULÁRIO -->

<div class="formulario-usuario">
    <form method="post" class="tabela-cadastro" enctype="multipart/form-data" action="modulos/usuarios/funcoes/cadastrar.php">
        <fieldset>
            <legend>Dados Pessoais</legend>
            <table cellspacing="10">
                <td>
                    <label for="nome">Nome: </label>
                </td>
                <td align="left">
                    <input type="text" name="nome" value="<?php echo $nome; ?>" placeholder="Digite aqui seu nome" class="caixa-cadastro" required>
                </td>
                <td rowspan="4"><img id="imagem" width="180" height="180" /><a href="#"></a></td>
                <tr>
                    <td>
                        <label for="email">E-mail: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="email" value="<?php echo $email; ?>" class="caixa-cadastro" placeholder="Digite seu e-mail" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="login">Login de Usuário: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="usuario" value="<?php echo $usuario; ?>" class="caixa-cadastro" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Senha: </label>
                    </td>
                    <td align="left">
                        <input type="password" name="senha" value="<?php echo $senha; ?>" class="caixa-cadastro" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="permissao">Permissão: </label>
                    </td>
                    <td align="left">
                        <select class="caixa-cadastro-select" name="permissao" value="<?php echo $permissao; ?>" required>
                            <option value="">Selecione uma Opção...</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Usuario">Usuário</option>
                            <option value="Webmaster">Webmaster</option>
                        </select>
                    </td>
                    <td>
                        <input type="file" name="foto" value="<img src='../../../images/usuarios/<?php $foto;?> />" id="perfil" class="upload-usuario" required/>
                    </td>

                </tr>

            </table>
        </fieldset>
        <br />
        <input type="submit" class="BotaoEnviar" name="cadastrar">
        <input type="reset" value="Limpar" class="BotaoLimpar">
    </form>

</div>
