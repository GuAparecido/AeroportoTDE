<?php
class Cargos
{
    private int $codigo_carro;
    private string $funcao;

    public function __construct($codigo_carro, $funcao)
    {
        $this->codigo_carro = $codigo_carro;
        $this->funcao=$funcao;
    }

    public function getCodigo_carro(): int{
        return $this->codigo_carro;
    }
    public function setCodigo_carro($codigo_carro): void{
        $this->codigo_carro = $codigo_carro;
    }

    public function getFuncao(): string{
        return $this->funcao;
    }
    public function setFuncao($funcao): void{
        $this->funcao = $funcao;
    }
}