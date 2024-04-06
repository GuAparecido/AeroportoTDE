<?php
class Aeronave
{
    private int $codigoAeronave;
    private string $modelo;
    private int $capacidadePassageiros;

    public function __construct(int $codigoAeronave, string $modelo, int $capacidadePassageiros)
    {
        $this->codigoAeronave = $codigoAeronave;
        $this->modelo = $modelo;
        $this->capacidadePassageiros = $capacidadePassageiros;
    }

    public function getCodigoAeronave(): int
    {
        return $this->codigoAeronave;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getCapacidadePassageiros(): int
    {
        return $this->capacidadePassageiros;
    }
    public function setCodigoAeronave(int $codigoAeronave): void
    {
        $this->codigoAeronave = $codigoAeronave;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function setCapacidadePassageiros(int $capacidadePassageiros): void
    {
        $this->capacidadePassageiros = $capacidadePassageiros;
    }
}
