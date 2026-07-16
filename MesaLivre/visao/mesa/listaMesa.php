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
    .status-badge {
        padding: 4px 10px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: bold;
    }
    .status-livre {
        background-color: #d4edda;
        color: #155724;
    }
    .status-ocupada {
        background-color: #f8d7da;
        color: #721c24;
    }
    .status-reservada {
        background-color: #fff3cd;
        color: #856404;
    }
    .status-manutencao {
        background-color: #e2e3e5;
        color: #383d41;
    }
</style>

<h2>Lista de Mesas</h2>

<?php
    if(isset($status)){
        echo "<div class='status'>".$status."</div>";
    }
?>

<a href="mesa.php?fun=cadastrar" class="btn btn-add">+ Cadastrar Nova Mesa</a>

<table>
    <tr>
        <th>ID</th>
        <th>Número</th>
        <th>Capacidade</th>
        <th>Localização</th>
        <th>Status</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>
    
    <?php
    if(isset($lista) && count($lista) > 0){
        foreach($lista as $mesa){	
            echo "<tr>"; 	
            echo "<td>" . $mesa['id_mesa'] . "</td>";
            echo "<td><a href='mesa.php?fun=exibir&id=" . $mesa['id_mesa'] . "'>" . $mesa['numero'] . "</a></td>";
            echo "<td>" . $mesa['capacidade'] . " pessoas</td>";
            echo "<td>" . $mesa['localizacao'] . "</td>";
            echo "<td><span class='status-badge status-" . strtolower(str_replace('ã', 'a', $mesa['status'])) . "'>" . ucfirst($mesa['status']) . "</span></td>";
            echo "<td>" . substr($mesa['descricao'], 0, 30) . "...</td>";
            echo "<td>
                    <a href='mesa.php?fun=exibir&id=" . $mesa['id_mesa'] . "' class='btn btn-view'>Ver</a>
                    <a href='mesa.php?fun=alterar&id=" . $mesa['id_mesa'] . "' class='btn btn-edit'>Editar</a>
                    <a href='mesa.php?fun=excluir&id=" . $mesa['id_mesa'] . "' class='btn btn-delete'>Excluir</a>
                  </td>";
            echo "</tr>";	
        }
    } else {
        echo "<tr><td colspan='7' style='text-align: center;'>Nenhuma mesa cadastrada</td></tr>";
    }
    ?>	
</table>
