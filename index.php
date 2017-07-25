<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>LOGIN - ÁREA ADMINISTRATIVA</title>

    <!-- CSS -->

    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="../css/font-awesome.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />

    <!-- JAVASCRIPT -->

    <script type="text/javascript" src="js/jquery/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery/jquery.form.js"></script>

    <!-- CONEXÃO BANCO DE DADOS -->

<?php
require "conexao.php";
ob_start();
session_start();
?>

</head>
<body>

<div id="fundo-form">
</div>
<div>

    <!-- LOGOMARCA -->

    <p><img src="images/logo.png"></p>

    <!-- FORMULÁRIO DE LOGIN -->

    <?php
    $imgLogin = "<img src='images/login.png' width='30px' height='30px'>";
    $imgSenha = "<img src='images/senha.png' width='30px' height='30px'>";
    ?>

<form method="post" action="" class="formulario">

    <?php echo $imgLogin; ?><input type="text" name="usuario"  placeholder="Usuário" class="CaixaTexto" /><br/><br/>
    <?php echo $imgSenha; ?><input type="password" name="senha"  placeholder="Senha" class="CaixaTexto" value="" /><br/><br/>
    <input type="checkbox" name="lembrar" class="Lembrar"  />Lembrar-me&emsp;&emsp;&emsp;
    <a href="esqueceu-senha.php">Esqueceu a senha?</a><br/><br/>
    <input type="submit" name="entrar" value="ENTRAR" class="BotaoLogin"/>
</form>
    <?php
    if(isset($_POST['entrar'])){
        $usuario = $_POST['usuario'];
        $senha = md5($_POST['senha']);

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $result = mysqli_query($conexao, $sql);
        if(mysqli_num_rows($result) > 0){
            while($res_1 = mysqli_fetch_assoc($result)) {
                $status = $res_1['status'];
                $usuario = $res_1['usuario'];
                $senha = $res_1['senha'];
                $nome = $res_1['nome'];
                $email = $res_1['email'];
                $permissao = $res_1['permissao'];

                if ($status == 'Inativo') {
                    echo "<h4>USUÁRIO INATIVO. CONTATE O ADMINISTRADOR DO SISTEMA.</h4>";
                } else {
                    session_start();
                    $_SESSION ['usuario'] = $usuario;
                    $_SESSION ['nome'] = $nome;
                    $_SESSION ['senha'] = $senha;
                    $_SESSION ['email'] = $email;
                    $_SESSION ['permissao'] = $permissao;

                    if ($permissao == 'Administrador') {
                        echo "<script language='javascript'>window.location='admin/index.php?id=home';</script>";
                    } elseif ($permissao == 'Webmaster') {
                        echo "<script language='javascript'>window.location='webmaster/index.php?id=home';</script>";
                    }elseif ($permissao == 'Usuario') {
                        echo "<script language='javascript'>window.location='usuario/index.php?id=home';</script>";
                    }
                }
            }
        }else{
            echo "<h4>USUÁRIO E/OU SENHA INVÁLIDOS!</h4>";
        }

    }
    ?>
</div>


    <!-- RODAPÉ -->

<footer>
    <p><b>DS WEB SOLUTION</b><br/>
        Sistema de Gerenciamento de Websites<br/>
        Versão 1.0</p>
</footer>
</body>
</html>