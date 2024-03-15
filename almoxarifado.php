<?php
class Almoxarifado
{
    private float $localizacao;
    private int $codigo_produto;
    private int $codigo_cliente;

    public function __construct ($localizacao, $codigo_produto, $codigo_cliente)
    {
        $this->$localizacao = $localizacao;
        $this->$codigo_produto = $codigo_produto;
        $this->$codigo_cliente = $codigo_cliente;
    }

    public function getLocalizacao(): float{
        return $this->localizacao;
    }
    public function setLocalizacao($localizacao): void{
        $this->localizacao = $localizacao;
    }

    public function getCodigo_Produto(): int{
        return $this->codigo_produto;
    }
    public function setCodigo_Produto($codigo_produto): void{
        $this->codigo_produto = $codigo_produto;
    }

    public function getCodigo_Cliente(): int{
        return $this->codigo_cliente;
    }
    public function setCodigo_Cliente($codigo_cliente): void{
        $this->codigo_cliente;
    }
}