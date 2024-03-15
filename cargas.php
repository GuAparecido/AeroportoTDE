<?php
class Cargas
{
    private int $codigo_carga;
    private string $tipo;
    private int $peso;
    private int $codigo_despachante;

    public function __construct($codigo_carga, $tipo, $peso, $codigo_despachante)
    {
        $this->$codigo_carga = $codigo_carga;
        $this->$tipo = $tipo;
        $this->$peso = $peso;
        $this->$codigo_despachante = $codigo_despachante;
    }

    public function getCodigo_Carga(): int{
        return $this->codigo_carga;
    }
    public function setCodigo_Carga($codigo_carga): void{
        $this->codigo_carga = $codigo_carga;
    }

    public function getTipo(): string{
        return $this->tipo;
    }
    public function setTipo($tipo): void{
        $this->tipo = $tipo;
    }

    public function getPeso(): int{
        return $this->peso;
    }
    public function setPeso($peso): void{
        $this->peso = $peso;
    }

    public function getCodigo_Despachante(): int{
        return $this->codigo_despachante;
    }
    public function setCodigo_Despachante($codigo_despachante): void{
        $this->codigo_despachante = $codigo_despachante;
    }
}