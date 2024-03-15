<?php
class Aeroporto
{
    private int $codigo_aeroporto;
    private string $capacidade;
    private string $localizacao;

    public function __construct($codigo_aeroporto, $capacidade, $localizacao)
    {
        $this->$codigo_aeroporto = $codigo_aeroporto;
        $this->$capacidade = $capacidade;
        $this->$localizacao = $localizacao;
    } // a

    public function getCodigo_Aeroporto(): int{
        return $this->codigo_aeroporto;
    }

    public function setCodigo_Aeroporto($codigo_aeroporto): void{
        $this->codigo_aeroporto = $codigo_aeroporto;
    }

    public function getCapacidade(): string{
        return $this->capacidade;
    }

    public function setCapacidade($capacidade): void{
        $this->capacidade = $capacidade;
    }

    public function getLocalicazao(): string{
        return $this->localizacao;
    }
    public function setLocalizacao($localizacao): void{
        $this->localizacao = $localizacao;
    }
}
