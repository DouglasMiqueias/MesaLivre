<h2>Lista de Categorias</h2>

<?php
    if(isset($status)){
        echo "<div class='status'>".$status."</div>";
    }
?>

<a href="categoria.php?fun=cadastrar" class="btn btn-add">+ Cadastrar Nova Categoria</a>
<a href="categoria.php?fun=consultar" class="btn btn-add">Consultar</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Cor</th>
        <th>Ícone</th>
        <th>Ativo</th>
        <th>Ações</th>
    </tr>
    
    <?php
    if(isset($lista) && count($lista) > 0){
        foreach($lista as $categoria){
            echo "<tr>";
            echo "<td>".$categoria['id_categoria']."</td>";
            echo "<td><a href='categoria.php?fun=exibir&id=".$categoria['id_categoria']."'>".$categoria['nome']."</a></td>";
            echo "<td>
                    <span style='display: inline-block; width: 20px; height: 20px; background-color: ".$categoria['cor']."; border: 1px solid #ccc; margin-right: 5px;'></span>
                    ".$categoria['cor']."
                  </td>";
            echo "<td>".$categoria['icone']."</td>";
            echo "<td><span class='status-badge ".($categoria['ativo'] == 1 ? 'status-livre' : 'status-ocupada')."'>".($categoria['ativo'] == 1 ? 'Sim' : 'Não')."</span></td>";
            echo "<td class='actions-cell'>
                    <a href='categoria.php?fun=exibir&id=".$categoria['id_categoria']."' class='btn btn-view'>Ver</a>
                    <a href='categoria.php?fun=alterar&id=".$categoria['id_categoria']."' class='btn btn-edit'>Editar</a>
                    <a href='categoria.php?fun=excluir&id=".$categoria['id_categoria']."' class='btn btn-delete'>Excluir</a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6' style='text-align: center;'>Nenhuma categoria cadastrada</td></tr>";
    }
    ?>
</table>
