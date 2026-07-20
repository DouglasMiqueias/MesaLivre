<?php
include_once("modelo/reserva/ReservaDAO_class.php");
include_once("modelo/reserva/Reserva_class.php");
include_once("modelo/cliente/ClienteDAO_class.php");
include_once("modelo/mesa/MesaDAO_class.php");

class CadastrarReserva{
    public function __construct(){
        if(isset($_POST["enviar"])){

        $r = new Reserva();
        $r->setIdCliente($_POST["id_cliente"]);
        $r->setIdMesa($_POST["id_mesa"]);
        $r->setDataReserva($_POST["data_reserva"]);
        $r->setHoraInicio($_POST["hora_inicio"]);
        $r->setHoraFim($_POST["hora_fim"]);
        $r->setNumeroPessoas($_POST["numero_pessoas"]);
        $r->setObservacoes($_POST["observacoes"]);
        $r->setStatus($_POST["status"]);

        $dao = new ReservaDAO();
        $dao->cadastrar($r);

        $status = "Cadastro da Reserva efetuado com sucesso!";
        echo "<h3>$status</h3>";
        echo "<br><a href='reserva.php?fun=listar'>Voltar</a>";

        } else {
            $clienteDAO = new ClienteDAO();
            $clientes = $clienteDAO->listar();

            $mesaDAO = new MesaDAO();
            $mesas = $mesaDAO->listar();

            include_once("visao/reserva/FormCadastroReserva_class.php");
        }
    }
}
?>