<?php
include_once "ConnectionFactory_class.php";
include_once "Reserva_class.php";

class ReservaDAO{
    public $con = null;
    
    public function __construct(){
        $conF = new ConnectionFactory();
        $this->con = $conF->getConnection();
    }

    public function cadastrar(Reserva $reserva){
        try{
            $stmt = $this->con->prepare("INSERT INTO reservas (id_cliente, id_mesa, data_reserva, hora_inicio, hora_fim, numero_pessoas, status, observacoes) VALUES (:id_cliente, :id_mesa, :data_reserva, :hora_inicio, :hora_fim, :numero_pessoas, :status, :observacoes)");
            $stmt->bindValue(':id_cliente', $reserva->getIdCliente());
            $stmt->bindValue(':id_mesa', $reserva->getIdMesa());
            $stmt->bindValue(':data_reserva', $reserva->getDataReserva());
            $stmt->bindValue(':hora_inicio', $reserva->getHoraInicio());
            $stmt->bindValue(':hora_fim', $reserva->getHoraFim());
            $stmt->bindValue(':numero_pessoas', $reserva->getNumeroPessoas());
            $stmt->bindValue(':status', $reserva->getStatus());
            $stmt->bindValue(':observacoes', $reserva->getObservacoes());

            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao cadastrar reserva: " . $e->getMessage();
        }
    }

    public function listar(){
        try{
            $stmt = $this->con->prepare("SELECT r.*, c.nome as nome_cliente, m.numero as numero_mesa FROM reservas r LEFT JOIN clientes c ON r.id_cliente = c.id_cliente LEFT JOIN mesas m ON r.id_mesa = m.id_mesa");
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $ex){
            echo "Erro ao listar reservas: " . $ex->getMessage();
        }
    }

    public function alterar(Reserva $reserva){
        try{
            $stmt = $this->con->prepare("UPDATE reservas SET id_cliente = :id_cliente, id_mesa = :id_mesa, data_reserva = :data_reserva, hora_inicio = :hora_inicio, hora_fim = :hora_fim, numero_pessoas = :numero_pessoas, status = :status, observacoes = :observacoes WHERE id_reserva = :id_reserva");

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
        } catch(PDOException $e) {
            echo "Erro ao alterar reserva: " . $e->getMessage();
        }
    }

    public function excluir(Reserva $reserva){
        try{
            $stmt = $this->con->prepare("DELETE FROM reservas WHERE id_reserva = :id_reserva");
            $stmt->bindValue(':id_reserva', $reserva->getIdReserva());
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao excluir reserva: " . $e->getMessage();
        }
    }

    public function exibir($id){
        try{
            $stmt = $this->con->prepare("SELECT * FROM reservas WHERE id_reserva = :id_reserva");
            $stmt->bindValue(':id_reserva', $id);
            $stmt->execute();

            $dado = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
    
    public function __destruct(){
        $this->con = null;
    }
}
?>