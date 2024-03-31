<?php
class Voo
{
    private int $codigoVoo;
    private Ticket $numeroTicket;
    private Aeronave $aeronave;
    private Servico $tipoServico;
    private Aeroporto $localPartida;
    private Aeroporto $localDestino;
    private float $tempoVoo;

    public function __construct(int $codigoVoo, Ticket $numeroTicket, Aeronave $aeronave, Servico $tipoServico, Aeroporto $localPartida, Aeroporto $localDestino, float $tempoVoo)
    {
        $this->codigoVoo = $codigoVoo;
        $this->numeroTicket = $numeroTicket;
        $this->aeronave = $aeronave;
        $this->tipoServico = $tipoServico;
        $this->localPartida = $localPartida;
        $this->localDestino = $localDestino;
        $this->tempoVoo = $tempoVoo;
    }

    public function getCodigoVoo(): int
    {
        return $this->codigoVoo;
    }

    public function getNumeroTicket(): Ticket
    {
        return $this->numeroTicket;
    }

    public function getAeronave(): Aeronave
    {
        return $this->aeronave;
    }

    public function getTipoServico(): Servico
    {
        return $this->tipoServico;
    }

    public function getLocalPartida(): Aeroporto
    {
        return $this->localPartida;
    }

    public function getLocalDestino(): Aeroporto
    {
        return $this->localDestino;
    }

    public function getTempoVoo(): float
    {
        return $this->tempoVoo;
    }

    public function setCodigoVoo(int $codigoVoo): void
    {
        $this->codigoVoo = $codigoVoo;
    }

    public function setNumeroTicket(Ticket $numeroTicket): void
    {
        $this->numeroTicket = $numeroTicket;
    }

    public function setAeronave(Aeronave $aeronave): void
    {
        $this->aeronave = $aeronave;
    }

    public function setTipoServico(Servico $tipoServico): void
    {
        $this->tipoServico = $tipoServico;
    }

    public function setLocalPartida(Aeroporto $localPartida): void
    {
        $this->localPartida = $localPartida;
    }

    public function setLocalDestino(Aeroporto $localDestino): void
    {
        $this->localDestino = $localDestino;
    }

    public function setTempoVoo(float $tempoVoo): void
    {
        $this->tempoVoo = $tempoVoo;
    }
}
