<?php
class Aeronave extends Companhia
{
    private int $codigoAeronave;
    private string $modelo;
    private float $capacidadeCarga;
    private int $capacidadePassageiros;
    private float $quantidadeCombustivel;
    private float $distanciaMaximaIninterrupta;

    public function __construct(int $codigoAeronave, string $modelo, float $capacidadeCarga, int $capacidadePassageiros, float $quantidadeCombustivel, float $distanciaMaximaIninterrupta)
    {
        $this->codigoAeronave = $codigoAeronave;
        $this->modelo = $modelo;
        $this->capacidadeCarga = $capacidadeCarga;
        $this->capacidadePassageiros = $capacidadePassageiros;
        $this->quantidadeCombustivel = $quantidadeCombustivel;
        $this->distanciaMaximaIninterrupta = $distanciaMaximaIninterrupta;
    }

    public function getCodigoAeronave(): int
    {
        return $this->codigoAeronave;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getCapacidadeCarga(): float
    {
        return $this->capacidadeCarga;
    }

    public function getCapacidadePassageiros(): int
    {
        return $this->capacidadePassageiros;
    }

    public function getQuantidadeCombustivel(): float
    {
        return $this->quantidadeCombustivel;
    }

    public function getDistanciaMaximaIninterrupta(): float
    {
        return $this->distanciaMaximaIninterrupta;
    }

    public function setCodigoAeronave(int $codigoAeronave): void
    {
        $this->codigoAeronave = $codigoAeronave;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function setCapacidadeCarga(float $capacidadeCarga): void
    {
        $this->capacidadeCarga = $capacidadeCarga;
    }

    public function setCapacidadePassageiros(int $capacidadePassageiros): void
    {
        $this->capacidadePassageiros = $capacidadePassageiros;
    }

    public function setQuantidadeCombustivel(float $quantidadeCombustivel): void
    {
        $this->quantidadeCombustivel = $quantidadeCombustivel;
    }

    public function setDistanciaMaximaIninterrupta(float $distanciaMaximaIninterrupta): void
    {
        $this->distanciaMaximaIninterrupta = $distanciaMaximaIninterrupta;
    }
}
