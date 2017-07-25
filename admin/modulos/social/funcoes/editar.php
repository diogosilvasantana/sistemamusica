<?php
require "../../../../conexao.php";

$id = $_GET['cod'];
$sql = "SELECT * FROM usuarios VALUE id=$id";
$result = mysqli_query($conexao, $sql);

header("location:../../../index.php?id=listar-usuarios");
?>