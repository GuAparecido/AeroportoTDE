<?php
class Servicos
{
    public string $tipo_voo;
    public string $tipo_frete;

    public function __construct($tipo_voo, $tipo_frete)
    {
        $this->tipo_voo = $tipo_voo;
        $this->tipo_frete = $tipo_frete;
    }

    public function getTipo_Voo(): int{
        return $this->tipo_voo;
    }
    public function setTipo_Voo($tipo_voo): void{
        $this->tipo_voo = $tipo_voo;
    }

    public function getTipo_frete(): string{
        return $this->tipo_frete;
    }
    public function setTipo_frete($tipo_frete): void{
        $this->tipo_frete = $tipo_frete;
    }
}

