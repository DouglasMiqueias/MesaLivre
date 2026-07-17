<h2>Lista de Clientes</h2>

<?php
    if(isset($status)){
        echo "<div class='status'>".$status."</div>";
    }
?>

<a href="cliente.php?fun=cadastrar" class="btn btn-add">+ Cadastrar Novo Cliente</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Bairro</th>
        <th>Data Cadastro</th>
        <th>Ações</th>
    </tr>
    
    <?php
    if(isset($lista) && count($lista) > 0){
        foreach($lista as $cliente){	
            echo "<tr>"; 	
            echo "<td>" . $cliente['id_cliente'] . "</td>";
            echo "<td><a href='cliente.php?fun=exibir&id=" . $cliente['id_cliente'] . "'>" . $cliente['nome'] . "</a></td>";
            echo "<td>" . $cliente['telefone'] . "</td>";
            echo "<td>" . $cliente['endereco'] . "</td>";
            echo "<td>" . $cliente['bairro'] . "</td>";
            echo "<td>" . $cliente['data_cadastro'] . "</td>";
            echo "<td>
                    <a href='cliente.php?fun=exibir&id=" . $cliente['id_cliente'] . "' class='btn btn-view'>Ver</a>
                    <a href='cliente.php?fun=alterar&id=" . $cliente['id_cliente'] . "' class='btn btn-edit'>Editar</a>
                    <a href='cliente.php?fun=excluir&id=" . $cliente['id_cliente'] . "' class='btn btn-delete'>Excluir</a>
                  </td>";
            echo "</tr>";	
        }
    } else {
        echo "<tr><td colspan='7' style='text-align: center;'>Nenhum cliente cadastrado</td></tr>";
    }
    ?>	
</table>
