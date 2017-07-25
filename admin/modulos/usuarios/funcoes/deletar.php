<?php
header('Content-Type: text/html; charset=utf-8');
require "../../../../conexao.php";

$id = $_GET['cod'];

        $sql = ("DELETE FROM usuarios WHERE id=$id");
        $result = mysqli_query($conexao,$sql);

echo("<script type='text/javascript'> alert('Usuário deletado com sucesso !!!');
      location.href='../../../index.php?id=listar-usuarios';</script>");
?>
