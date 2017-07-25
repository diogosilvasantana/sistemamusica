<?php

require "../conexao.php";

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conexao, $sql);
?>

<html>
<head>

</head>

<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Usuário</td>
            <td>E-mail</td>
            <td>Permissão</td>
            <td>Status</td>

        </tr>
        <?php while($dado = $result->fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["id"]; ?></td>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["usuario"]; ?></td>
            <td><?php echo $dado["email"]; ?></td>
            <td><?php echo $dado["permissao"]; ?></td>
            <td><?php echo $dado["status"]; ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>
