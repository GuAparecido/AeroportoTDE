<?php
class Companhia extends Aeroporto
{
    private int $codigoCompanhia;
    private string $nome;
    private string $paisOrigem;

    public function __construct(int $codigoCompanhia, string $nome, string $paisOrigem)
    {
        $this->codigoCompanhia = $codigoCompanhia;
        $this->nome = $nome;
        $this->paisOrigem = $paisOrigem;
    }

    public function getCodigoCompanhia(): int
    {
        return $this->codigoCompanhia;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPaisOrigem(): string
    {
        return $this->paisOrigem;
    }

    public function setCodigoCompanhia(int $codigoCompanhia): void
    {
        $this->codigoCompanhia = $codigoCompanhia;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setPaisOrigem(string $paisOrigem): void
    {
        $this->paisOrigem = $paisOrigem;
    }
}
