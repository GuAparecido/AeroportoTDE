<?php
class Voo
{
    private int $codigoVoo;
    private Aeronave $aeronave;
    private Aeroporto $localPartida;
    private Aeroporto $localDestino;
    private float $tempoVoo;

    public function __construct(int $codigoVoo, Aeronave $aeronave, Aeroporto $localPartida, Aeroporto $localDestino, float $tempoVoo)
    {
        $this->codigoVoo = $codigoVoo;
        $this->aeronave = $aeronave;
        $this->localPartida = $localPartida;
        $this->localDestino = $localDestino;
        $this->tempoVoo = $tempoVoo;
    }

    public function getCodigoVoo(): int
    {
        return $this->codigoVoo;
    }
    public function getAeronave(): Aeronave
    {
        return $this->aeronave;
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

    public function setAeronave(Aeronave $aeronave): void
    {
        $this->aeronave = $aeronave;
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
