<?php
class Pessoa
{
    private string $nome;
    private dateTime $dataNascimento;
    private string $cpf;
    private string $rg;
    private string $endereco;

    public function __construct(string $nome, dateTime $dataNascimento, string $cpf, string $rg, string $endereco)
    {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->rg = $rg;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDataNascimento(): dateTime
    {
        return $this->dataNascimento;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getRg(): string
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

    public function setDataNascimento(dateTime $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function setRg(string $rg): void
    {
        $this->rg = $rg;
    }

    public function setEndereco(string $endereco): void
    {
        $this->endereco = $endereco;
    }
}
