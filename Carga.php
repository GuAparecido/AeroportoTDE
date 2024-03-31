<?php
class Carga
{
    private int $codigoCarga;
    private string $tipo;
    private int $peso;
    private int $codigoCliente;

    public function __construct($codigo_carga, $tipo, $peso, $codigo_despachante)
    {
        $this->$codigo_carga = $codigo_carga;
        $this->$tipo = $tipo;
        $this->$peso = $peso;
        $this->$codigo_despachante = $codigo_despachante;
    }

    public function getCodigoCarga(): int{
        return $this->codigoCarga;
    }
    public function setCodigoCarga($codigoCarga): void{
        $this->codigoCarga = $codigoCarga;
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

    public function getCodigoCliente(): int{
        return $this->codigoCliente;
    }
    public function setCodigoCliente($codigoCliente): void{
        $this->codigoCliente = $codigoCliente;
    }
}