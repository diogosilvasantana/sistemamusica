<?php
require "../../../config/data.php";
require "../../../../conexao.php";
date_default_timezone_set('America/Sao_Paulo');

$nome = $_POST['nome'];
$foto = $_FILES['foto'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$permissao = $_POST ['permissao'];
$status = "Ativo";
$date = "{$dia}" . "/" . $mes_extenso["$mes"] . "/" . date("Y") . " - " . date("H:i");

if(isset($foto)){

    $extensao = strtolower(substr($foto['name'], -4));
    $novo_nome = md5(time()). $extensao;
    $diretorio = "../../../../images/usuarios/";

    move_uploaded_file($foto['tmp_name'], $diretorio.$novo_nome);

    $sql = ("INSERT INTO usuarios (nome, foto, email, usuario, senha, permissao, status, data) VALUES ('$nome','$novo_nome','$email','$usuario','$senha','$permissao','$status','$date')");
    $result = mysqli_query($conexao, $sql);
}
  echo("<script type='text/javascript'> alert('Cadastro realizado com sucesso !!!'); location.href='../../../index.php?id=listar-usuarios';</script>");


;

?>
