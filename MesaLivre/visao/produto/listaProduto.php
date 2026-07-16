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

<h2>Lista de Produtos</h2>

<?php
    if(isset($status)){
        echo "<div class='status'>".$status."</div>";
    }
?>

<a href="produto.php?fun=cadastrar" class="btn btn-add">+ Cadastrar Novo Produto</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Categoria</th>
        <th>Estoque</th>
        <th>Data Cadastro</th>
        <th>Ações</th>
    </tr>
    
    <?php
    if(isset($lista) && count($lista) > 0){
        foreach($lista as $produto){	
            echo "<tr>"; 	
            echo "<td>" . $produto['id_produto'] . "</td>";
            echo "<td><a href='produto.php?fun=exibir&id=" . $produto['id_produto'] . "'>" . $produto['nome'] . "</a></td>";
            echo "<td>" . substr($produto['descricao'], 0, 30) . "...</td>";
            echo "<td>R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>";
            echo "<td>" . $produto['categoria'] . "</td>";
            echo "<td>" . $produto['estoque'] . "</td>";
            echo "<td>" . $produto['data_cadastro'] . "</td>";
            echo "<td>
                    <a href='produto.php?fun=exibir&id=" . $produto['id_produto'] . "' class='btn btn-view'>Ver</a>
                    <a href='produto.php?fun=alterar&id=" . $produto['id_produto'] . "' class='btn btn-edit'>Editar</a>
                    <a href='produto.php?fun=excluir&id=" . $produto['id_produto'] . "' class='btn btn-delete'>Excluir</a>
                  </td>";
            echo "</tr>";	
        }
    } else {
        echo "<tr><td colspan='8' style='text-align: center;'>Nenhum produto cadastrado</td></tr>";
    }
    ?>	
</table>
