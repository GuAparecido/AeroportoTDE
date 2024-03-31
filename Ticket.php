<?php
class Ticket extends Servico
{
    private Cliente $cliente;
    private int $codigoTicket;
    private float $valorServico;

    public function __construct(Cliente $cliente, int $codigoTicket, float $valorServico)
    {
        $this->cliente = $cliente;
        $this->codigoTicket = $codigoTicket;
        $this->valorServico = $valorServico;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function getCodigoTicket(): int
    {
        return $this->codigoTicket;
    }

    public function getValorServico(): float
    {
        return $this->valorServico;
    }

    public function setCliente(Cliente $cliente): void
    {
        $this->cliente = $cliente;
    }

    public function setCodigoTicket(int $codigoTicket): void
    {
        $this->codigoTicket = $codigoTicket;
    }

    public function setValorServico(float $valorServico): void
    {
        $this->valorServico = $valorServico;
    }
}
