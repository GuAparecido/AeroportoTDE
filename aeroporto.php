<?php
class Aeroporto extends Voo
{
    private int $codigoAeroporto;
    private int $capacidadeAeronaves;
    private int $capacidadePublico;
    private string $localizacao;

    public function __construct(int $codigoAeroporto, int $capacidadeAeronaves, int $capacidadePublico, string $localizacao)
    {
        $this->codigoAeroporto = $codigoAeroporto;
        $this->capacidadeAeronaves = $capacidadeAeronaves;
        $this->capacidadePublico = $capacidadePublico;
        $this->localizacao = $localizacao;
    }

    public function getCodigoAeroporto(): int
    {
        return $this->codigoAeroporto;
    }

    public function getCapacidadeCarros(): int
    {
        return $this->capacidadeAeronaves;
    }

    public function getCapacidadePublico(): int
    {
        return $this->capacidadePublico;
    }

    public function getLocalizacao(): string
    {
        return $this->localizacao;
    }

    public function setCodigoAeroporto(int $codigoAeroporto): void
    {
        $this->codigoAeroporto = $codigoAeroporto;
    }

    public function setCapacidadeAeronaves(int $capacidadeAeronaves): void
    {
        $this->capacidadeAeronaves = $capacidadeAeronaves;
    }

    public function setCapacidadePublico(int $capacidadePublico): void
    {
        $this->capacidadePublico = $capacidadePublico;
    }

    public function setLocalizacao(string $localizacao): void
    {
        $this->localizacao = $localizacao;
    }
}
