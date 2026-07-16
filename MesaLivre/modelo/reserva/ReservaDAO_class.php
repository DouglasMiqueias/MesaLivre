<?php
include_once "ConnectionFactory_class.php";
include_once "Reserva_class.php";

class ReservaDAO{
    public function cadastrar(Reserva $reserva){
        try{
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();

            $stmt = $con->prepare("INSERT INTO reservas (id_cliente, id_mesa, data_reserva, hora_inicio, hora_fim, numero_pessoas, status, observacoes) VALUES (:id_cliente, :id_mesa, :data_reserva, :hora_inicio, :hora_fim, :numero_pessoas, :status, :observacoes)");
            $stmt->bindValue(':id_cliente', $reserva->getIdCliente());
            $stmt->bindValue(':id_mesa', $reserva->getIdMesa());
            $stmt->bindValue(':data_reserva', $reserva->getDataReserva());
            $stmt->bindValue(':hora_inicio', $reserva->getHoraInicio());
            $stmt->bindValue(':hora_fim', $reserva->getHoraFim());
            $stmt->bindValue(':numero_pessoas', $reserva->getNumeroPessoas());
            $stmt->bindValue(':status', $reserva->getStatus());
            $stmt->bindValue(':observacoes', $reserva->getObservacoes());

            $stmt->execute();
            $fabrica->close();
        } catch (PDOException $e) {
            echo "Erro ao cadastrar reserva: " . $e->getMessage();
        }
    }

    public function listar(){
        try{
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();

            $stmt = $con->prepare("SELECT * FROM reservas");
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $fabrica->close();
            return $result;
        } catch (PDOException $ex){
            echo "Erro ao listar reservas: " . $ex->getMessage();
        }
    }

    public function alterar(Reserva $reserva){
        try{
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();

            $stmt = $con->prepare("UPDATE reservas SET id_cliente = :id_cliente, id_mesa = :id_mesa, data_reserva = :data_reserva, hora_inicio = :hora_inicio, hora_fim = :hora_fim, numero_pessoas = :numero_pessoas, status = :status, observacoes = :observacoes WHERE id_reserva = :id_reserva");

            $stmt->bindValue(':id_cliente', $reserva->getIdCliente());
            $stmt->bindValue(':id_mesa', $reserva->getIdMesa());
            $stmt->bindValue(':data_reserva', $reserva->getDataReserva());
            $stmt->bindValue(':hora_inicio', $reserva->getHoraInicio());
            $stmt->bindValue(':hora_fim', $reserva->getHoraFim());
            $stmt->bindValue(':numero_pessoas', $reserva->getNumeroPessoas());
            $stmt->bindValue(':status', $reserva->getStatus());
            $stmt->bindValue(':observacoes', $reserva->getObservacoes());
            $stmt->bindValue(':id_reserva', $reserva->getIdReserva());

            $stmt->execute();
            $fabrica->close();
        } catch(PDOException $e) {
            echo "Erro ao alterar reserva: " . $e->getMessage();
        }
    }

    public function excluir(Reserva $reserva){
        try{
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();

            $stmt = $con->prepare("DELETE FROM reservas WHERE id_reserva = :id_reserva");
            $stmt->bindValue(':id_reserva', $reserva->getIdReserva());
            $stmt->execute();
            $fabrica->close();
        } catch (PDOException $e) {
            echo "Erro ao excluir reserva: " . $e->getMessage();
        }
    }

    public function exibir($id){
        try{
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();

            $stmt = $con->prepare("SELECT * FROM reservas WHERE id_reserva = :id_reserva");
            $stmt->bindValue(':id_reserva', $id);
            $stmt->execute();

            $dado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $fabrica->close();

            $r = new Reserva();
            $r->setIdReserva($dado[0]['id_reserva']);
            $r->setIdCliente($dado[0]['id_cliente']);
            $r->setIdMesa($dado[0]['id_mesa']);
            $r->setDataReserva($dado[0]['data_reserva']);
            $r->setHoraInicio($dado[0]['hora_inicio']);
            $r->setHoraFim($dado[0]['hora_fim']);
            $r->setNumeroPessoas($dado[0]['numero_pessoas']);
            $r->setStatus($dado[0]['status']);
            $r->setObservacoes($dado[0]['observacoes']);

            return $r;
        } catch (PDOException $ex){
            echo "Erro ao exibir reserva: " . $ex->getMessage();
            return null;
        }
    }
}
?>