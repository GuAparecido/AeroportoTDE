<?php
class Piloto 
{
    public int $codigo_piloto;
    public string $nome;
    public int $idade;

    public function __construct($codigo_piloto, $nome, $idade)
    {
        $this->codigo_piloto = $codigo_piloto;
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getCodigo_Piloto(): int{
        return $this->codigo_piloto;
    }

    public function setCodigo_Piloto($codigo_piloto): void{
        $this->codigo_piloto = $codigo_piloto;
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function setNome($nome): void{
        $this->nome = $nome;
    }

    public function getIdade(): int{
        return $this->idade;
    }

    public function setIdade($idade): void{
        $this->$idade = $idade;
    }
}

