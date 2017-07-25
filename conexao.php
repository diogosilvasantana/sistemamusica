<?php
/* Conexão do Banco de Dados */

function conectar(){
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "sistema";

    $con = new mysqli($servidor, $usuario, $senha, $bd);
    return $con;
}
$conexao = conectar();
?>

