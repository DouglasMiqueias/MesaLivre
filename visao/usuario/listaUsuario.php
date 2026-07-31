<h2>Lista de Usuários</h2>

<?php
if(isset($status)){
    echo "<div class='status'>".$status."</div>";
}
?>

<a href="usuario.php?fun=cadastrar" class="btn btn-add">+ Cadastrar Novo Usuário</a>
<a href="usuario.php?fun=consultar" class="btn btn-add">Consultar</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Data Cadastro</th>
        <th>Ações</th>
    </tr>

    <?php
    if(isset($lista) && count($lista) > 0){
        foreach($lista as $usuario){
            echo "<tr>";
            echo "<td>" . $usuario['id_usuario'] . "</td>";
            echo "<td>" . $usuario['nome'] . "</td>";
            echo "<td>" . $usuario['email'] . "</td>";
            echo "<td>" . $usuario['telefone'] . "</td>";
            echo "<td>" . $usuario['data_cadastro'] . "</td>";
            echo "<td>
                    <a href='usuario.php?fun=exibir&id=" . $usuario['id_usuario'] . "' class='btn btn-view'>Ver</a>
                    <a href='usuario.php?fun=alterar&id=" . $usuario['id_usuario'] . "' class='btn btn-edit'>Editar</a>
                    <a href='usuario.php?fun=excluir&id=" . $usuario['id_usuario'] . "' class='btn btn-delete'>Excluir</a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6' style='text-align: center;'>Nenhum usuário cadastrado</td></tr>";
    }
    ?>
</table>