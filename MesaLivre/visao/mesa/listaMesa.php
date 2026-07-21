<h2>Lista de Mesas</h2>

<?php
    if(isset($status)){
        echo "<div class='status'>".$status."</div>";
    }
?>

<a href="mesa.php?fun=cadastrar" class="btn btn-add">+ Cadastrar Nova Mesa</a>
<a href="mesa.php?fun=consultar" class="btn btn-add">Consultar</a>

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
