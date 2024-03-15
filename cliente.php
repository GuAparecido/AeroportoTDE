<?php
class Cliente
{
    private int $codigo_cliente;
    private string $nome;
    private int $idade;
    private string $cpf;
    private string $rg;

    public function __construct($codigo_cliente, $nome, $idade, $cpf, $rg)
    {
        $this->codigo_cliente = $codigo_cliente;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
        $this->rg = $rg;
    }

    public function getCodigo_Cliente(): int{
        return $this->codigo_cliente;
    }

    public function setCodigo_Cliente($codigo_cliente): void{
        $this->codigo_cliente = $codigo_cliente;
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
        $this->idade = $idade;
    }

    public function getRg(): int{
        return $this->rg;
    }

    public function setRg($rg): void{
        $this->rg = $rg;
    }

    public function getCpf(): int{
        return $this->cpf;
    }

    public function setCpf($cpf): void{
        $this->cpf = $cpf;
    }

}

