<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="../css/font-awesome.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.form.js"></script>
    <title></title>

    <?php
    require "conexao.php";
    session_start();
    ?>

</head>
<body>
<div>
<!-- LOGOMARCA -->

<p><img src="images/logo.png"></p>

<?php
$imgEmail = "<img src='images/mail.png' width='30px' height='30px'>";
$imgSenha = "<img src='images/senha.png' width='30px' height='30px'>";
?>

<form class="formulario" method="post" action="envia-nova-senha.php">



    <?php

    echo "<h4>Digite seu e-mail abaixo para recuperar sua senha.</h4>";
    if(isset($_POST['recuperar'])){
        $email = $_POST['email'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
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
                    echo "<h3>Usuário Inativo! Contate o Administrador.</h3>";
                } else {
                    $_SESSION ['usuario'] = $usuario;
                    $_SESSION ['nome'] = $nome;
                    $_SESSION ['senha'] = $senha;
                    $_SESSION ['email'] = $email;
                    $_SESSION ['permissao'] = $permissao;

                    if ($result == $email){
                     echo "<h3>Foi enviado para seu e-mail a recuperação de sua senha.</h3>";
                    }


                }
            }
        }else{
            echo "<h3>Esse e-mail não está cadastrado no sistema!</h3>";
        }

    }
    ?>




    <?php echo $imgEmail; ?><input type="text" name="email"  placeholder="Digite aqui seu e-mail" class="CaixaTexto" required/><br/><br/>
    <input type="submit" name="recuperar" value="Recuperar Senha" class="BotaoLogin"/>
</form>


<!-- RODAPÉ -->

<footer>
    <p><b>DS WEB SOLUTION</b><br/>
        Sistema de Gerenciamento de Websites<br/>
        Versão 1.0</p>
</footer>
</div>
</body>
</html>