<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #dc3545;
        color: white;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
    .btn {
        padding: 5px 10px;
        text-decoration: none;
        border-radius: 3px;
        color: white;
        font-size: 12px;
    }
    .btn-edit {
        background-color: #dc3545;
    }
    .btn-delete {
        background-color: #e74c3c;
    }
    .btn-view {
        background-color: #27ae60;
    }
    .btn-add {
        background-color: #dc3545;
        padding: 10px 20px;
        display: inline-block;
        margin-bottom: 20px;
    }
    h2 {
        color: #dc3545;
        margin-bottom: 20px;
    }
    .status {
        background-color: #d4edda;
        color: #155724;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
</style>

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
