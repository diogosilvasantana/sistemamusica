<?php
require "../../../../conexao.php";

$id = $_GET['cod'];

        $sql = ("DELETE FROM usuarios WHERE id=$id");
        $result = mysqli_query($conexao,$sql);

header("location:../../../index.php?id=listar-usuarios");
?>


