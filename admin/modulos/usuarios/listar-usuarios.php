<h2><i class="fa fa-users">&ensp;</i>LISTA DE USUÁRIOS</h2>


<style>
    .cad-usuarios {
        border-collapse: collapse;
        width: 90%;
        margin-left: 37px;
        background-color: #fdfdfd;
        border: 1px solid #d1d5db;
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

    }

    .cad-usuarios td {
        text-align: center;
        font-size: 13px;
        color: #5b5f65;
        padding: 10px 0 10px 0;
    }
    .cad-usuarios th {
        padding: 10px 0 10px 0;
    }

    .cad-usuarios tr:nth-child(even){background-color: rgba(178, 178, 178, 0.11)
    }

    .cad-usuarios th {
        background-color: #3e9aca;
        color: white;
        font-size: 13px;
    }
</style>

<?php

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conexao, $sql);
?>

<!-- TABELA -->

<div class="select-listar">

<select class="caixa-listar-select" name="ordenar">
    <option value="">Ordenar por...</option>
    <option value="">Código</option>
    <option value="">Nome</option>
    <option value="">Usuário</option>
    <option value="">Permissão</option>
    <option value="">Data Cadastro</option>
    <option value="">Status</option>
</select>

<select class="caixa-listar-select" name="ordenar">
    <option value="">Filtrar Permissões...</option>
    <option value="">Administrador</option>
    <option value="">Usuário</option>
    <option value="">Webmaster</option>
</select>
    <select class="caixa-listar-select" name="ordenar">
        <option value="">Permissões...</option>
        <option value="">Administrador</option>
        <option value="">Usuário</option>
        <option value="">Webmaster</option>
    </select>
    <br/><br/>

</div>

<table class="cad-usuarios">
    <tr>
        <th>Selec</th>
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

    <?php while($vreg=mysqli_fetch_row($result)) {
        $id = $vreg[0];
        $nome = $vreg[1];
        $foto = $vreg[2];
        $usuario = $vreg[3];
        $email = $vreg[5];
        $permissao = $vreg[6];
        $status = $vreg[7];
        $data = $vreg[8];

        echo "<tr>";

        echo "<td align='center'><input type='checkbox' value='$id' name='sel[]'/> </td>
              <td>$id</td>
              <td><img src='../images/usuarios/$foto' width='40' height='40' /></td>
              <td>$nome</td>
              <td>$usuario</td>
              <td>$email</td>
              <td>$permissao</td>
              <td>$data</td>
              <td>$status</td>
              <td align='center'>
              <a href='modulos/usuarios/funcoes/editar.php?cod=$id'><i class=\"fa fa-pencil\"></i><br/></a>
              <a href='modulos/usuarios/funcoes/deletar.php?cod=$id' onClick=\"return confirm('Tem certeza que deseja excluir esse usuário?');\"><i class=\"fa fa-trash\"></i><br/></a>
              </td>";
        echo "</tr>";
    }
    mysqli_close($conexao);

?>

</table>
  <li><a href="index.php?id=cadastrar-usuarios"><br/><span> Novo Usuário</span></a></li>
<br/>
<!-- <input type="submit" value="Excluir Selecionados" href="index.php?id=apagar-usuario?cod=<?php echo $id ?>" class="BotaoAzul" name="btn-excluir" /> -->
