<h2>Lista de Reservas</h2>

<?php
    if(isset($status)){
        echo "<div class='status'>".$status."</div>";
    }
?>

<a href="reserva.php?fun=cadastrar" class="btn btn-add">+ Cadastrar Nova Reserva</a>
<a href="reserva.php?fun=consultar" class="btn btn-add">Consultar</a>

<table>
    <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Mesa</th>
        <th>Data</th>
        <th>Hora Início</th>
        <th>Hora Fim</th>
        <th>N° Pessoas</th>
        <th>Status</th>
        <th>Observações</th>
        <th>Ações</th>
    </tr>
    
    <?php
    if(isset($lista) && count($lista) > 0){
        foreach($lista as $reserva){
            echo "<tr>";
            echo "<td>".$reserva['id_reserva']."</td>";
            echo "<td>".$reserva['nome_cliente']."</td>";
            echo "<td>".$reserva['numero_mesa']."</td>";
            echo "<td>".$reserva['data_reserva']."</td>";
            echo "<td>".$reserva['hora_inicio']."</td>";
            echo "<td>".$reserva['hora_fim']."</td>";
            echo "<td>".$reserva['numero_pessoas']."</td>";
            echo "<td>".$reserva['status']."</td>";
            echo "<td>".$reserva['observacoes']."</td>";
            echo "<td class='actions-cell'>
                    <a href='reserva.php?fun=alterar&id=".$reserva['id_reserva']."' class='btn btn-edit'>Alterar</a>
                    <a href='reserva.php?fun=excluir&id=".$reserva['id_reserva']."' class='btn btn-delete'>Excluir</a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='10' style='text-align: center;'>Nenhuma reserva cadastrada</td></tr>";
    }
    ?>
</table>
