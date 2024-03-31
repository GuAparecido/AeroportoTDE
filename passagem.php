<?php
class Passagem extends Ticket
{
    private int $codigoPassagem;
    private int $numeroAssento;
    private int $guicheEmbarque;

    public function __construct(int $codigoPassagem, int $numeroAssento, int $guicheEmbarque)
    {
        $this->codigoPassagem = $codigoPassagem;
        $this->numeroAssento = $numeroAssento;
        $this->guicheEmbarque = $guicheEmbarque;
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
