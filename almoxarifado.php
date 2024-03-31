<?php
class Almoxarifado
{
    private Aeroporto $aeroporto;
    private float $quantidadeArmazenamento;
    private Carga $codigoCarga;

    public function __construct(Aeroporto $aeroporto, float $quantidadeArmazenamento, Carga $codigoCarga)
    {
        $this->aeroporto = $aeroporto;
        $this->quantidadeArmazenamento = $quantidadeArmazenamento;
        $this->codigoCarga = $codigoCarga;
    }

    public function getAeroporto(): Aeroporto
    {
        return $this->aeroporto;
    }

    public function getQuantidadeArmazenamento(): float
    {
        return $this->quantidadeArmazenamento;
    }

    public function getCodigoCarga(): Carga
    {
        return $this->codigoCarga;
    }

    public function setAeroporto(Aeroporto $aeroporto): void
    {
        $this->aeroporto = $aeroporto;
    }

    public function setQuantidadeArmazenamento(float $quantidadeArmazenamento): void
    {
        $this->quantidadeArmazenamento = $quantidadeArmazenamento;
    }

    public function setCodigoCarga(Carga $codigoCarga): void
    {
        $this->codigoCarga = $codigoCarga;
    }
}
