<?php
class Companhia
{
    public int $codigo_companhia;
    public string $nome;
    public string $nacionalidade;

    public function __construct($codigo_companhia, $nome, $nacionalidade)
    {
        $this->codigo_companhia = $codigo_companhia;
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
    }

    public function getCodigo_Companhia(): int{
        return $this->codigo_companhia;
    }

    public function setCodigo_Companhia($codigo_companhia): void{
        $this->codigo_companhia = $codigo_companhia;
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function setNome($nome): void{
        $this->nome = $nome;
    }

    public function getNacionalidade(): int{
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade): void{
        $this->nacionalidade = $nacionalidade;
    }

}