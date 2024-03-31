<?php
class Cliente extends Pessoa
{
    private int $codigoCliente;
    private DateTime $dataCadastro;

    public function __construct(int $codigoCliente, DateTime $dataCadastro)
    {
        $this->codigoCliente = $codigoCliente;
        $this->dataCadastro = $dataCadastro;
    }

    public function getCodigoCliente(): int
    {
        return $this->codigoCliente;
    }

    public function getDataCadastro(): DateTime
    {
        return $this->dataCadastro;
    }

    public function setCodigoCliente(int $codigoCliente): void
    {
        $this->codigoCliente = $codigoCliente;
    }

    public function setDataCadastro(DateTime $dataCadastro): void
    {
        $this->dataCadastro = $dataCadastro;
    }
}
