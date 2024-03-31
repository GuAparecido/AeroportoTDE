<?php
class Pessoa
{
    private string $nome;
    private int $idade;
    private string $cpf;
    private string $rg;
    private string $endereco;

    public function __construct(string $nome, int $idade, string $cpf, string $rg, string $endereco)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getRG(): string
    {
        return $this->rg;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function setRG(string $rg): void
    {
        $this->rg = $rg;
    }

    public function setEndereco(string $endereco): void
    {
        $this->endereco = $endereco;
    }
}
