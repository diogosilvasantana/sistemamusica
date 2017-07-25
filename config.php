<?php
 require "conexao.php";

@session_start();

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$permissao = $_SESSION['permissao'];

if($usuario == ''){
    echo"<script language='javascript'>window.location='../index.php';</script>";
}elseif ($nome == ''){
    echo"<script language='javascript'>window.location='../index.php';</script>";
}elseif ($senha ==''){
    echo"<script language='javascript'>window.location='../index.php';</script>";
}else{
   if ($painel_atual != $permissao){
       echo"<script language='javascript'>window.location='../index.php';</script>";
    }
}

?>
