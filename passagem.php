<?php
class Passagem
{
    private Cliente $cliente;
    private int $codigoPassagem;
    private int $numeroAssento;
    private int $guicheEmbarque;

    public function __construct(Cliente $cliente, int $codigoPassagem, int $numeroAssento, int $guicheEmbarque)
    {
        $this->cliente = $cliente;
        $this->codigoPassagem = $codigoPassagem;
        $this->numeroAssento = $numeroAssento;
        $this->guicheEmbarque = $guicheEmbarque;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function getCodigoPassagem(): int
    {
        return $this->codigoPassagem;
    }

    public function getNumeroAssento(): int
    {
        return $this->numeroAssento;
    }

    public function getGuicheEmbarque(): int
    {
        return $this->guicheEmbarque;
    }

    public function setCliente(Cliente $cliente): void
    {
        $this->cliente = $cliente;
    }

    public function setCodigoPassagem(int $codigoPassagem): void
    {
        $this->codigoPassagem = $codigoPassagem;
    }

    public function setNumeroAssento(int $numeroAssento): void
    {
        $this->numeroAssento = $numeroAssento;
    }

    public function setGuicheEmbarque(int $guicheEmbarque): void
    {
        $this->guicheEmbarque = $guicheEmbarque;
    }
}
