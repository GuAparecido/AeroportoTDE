<?php
class Aeronave
{
    private int $codigo_aeronave;
    private string $modelo;
    private float $capacidade;

    public function __construct($codigo_aeronave, $modelo, $capacidade)
    {
        $this->$codigo_aeronave = $codigo_aeronave;
        $this->$modelo = $modelo;
        $this->$capacidade = $capacidade;
    }

    public function getCodigo_Aeronave(): int{
        return $this->codigo_aeronave;
    }
    public function setCodigo_Aeronave($codigo_aeronave): void{
        $this->codigo_aeronave = $codigo_aeronave;
    }

    public function getModelo(): string{
        return $this->modelo;
    }
    public function setModelo($modelo): void{
        $this->modelo = $modelo;
    }
    
    public function getCapacidade(): float{
        return $this->capacidade;
    }
    public function setCapacidade($capacidade): void{
        $this->capacidade = $capacidade;
    }
    

}

