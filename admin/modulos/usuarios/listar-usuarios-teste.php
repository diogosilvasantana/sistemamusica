<?php require "../../../conexao.php"; ?>

<h2>LISTA DE USUÁRIOS</h2>


<style>
    .cad-usuarios {
        border-collapse: collapse;
        width: 85%;
        margin-left: 37px;
    }

    .cad-usuarios .icones-tabela{
        margin-left: 50px;
    }
    .cad-usuarios td a{
        position: relative;
        float: left;
        padding-left: 15px;
        font-size: 25px;
        color: #3e9aca ;
        -o-transition:.3s;
        -ms-transition:.3s;
        -moz-transition:.3s;
        -webkit-transition:.3s;
        transition:.3s;
    }
    .cad-usuarios td a:hover{
        color: #ff8b00;
    }
    .cad-usuarios img{
        border-radius: 5px;
    }

    .cad-usuarios td {
        text-align: center;
        font-size: 13px;
        padding: 10px 0 10px 0;
    }
    .cad-usuarios th {
        padding: 10px 0 10px 0;
    }

    .cad-usuarios tr:nth-child(even){background-color: #e9e9e9
    }

    .cad-usuarios th {
        background-color: #3e9aca;
        color: white;
    }
</style>

<?php

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conexao, $sql);
?>

<!-- TABELA -->

<table class="cad-usuarios">
    <tr>
        <th>Código</th>
        <th>Foto</th>
        <th>Nome</th>
        <th>Usuário</th>
        <th>E-mail</th>
        <th>Permissão</th>
        <th>Data Cadastro</th>
        <th>Status</th>
        <th>Ações</th>

    </tr>

    <?php  while($vreg=mysqli_fetch_row($result)) {
        $id = $vreg[0];
        $nome = $vreg[1];
        $foto = $vreg[2];
        $usuario = $vreg[3];
        $email = $vreg[5];
        $permissao = $vreg[6];
        $status = $vreg[7];
        $data = $vreg[8];

        echo "<tr>";
        echo "<td>$id</td>
              <td><img src='../../../images/usuarios/$foto' width='60' height='60' /></td>
              <td>$nome</td>
              <td>$usuario</td>
              <td>$email</td>
              <td>$permissao</td>
              <td>$data</td>
              <td>$status</td>";
        echo "</tr>";

    }
    mysqli_close($conexao);

   ?>

</table>