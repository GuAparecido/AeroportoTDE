<?php
class Funcionario extends Pessoa
{
    private int $codigoFuncionario;
    private string $cargoFuncionario;
    private string $contrato;
    private float $salario;
    private DateTime $dataContratacao;

    public function __construct(int $codigoFuncionario, string $cargoFuncionario, string $contrato, float $salario, DateTime $dataContratacao)
    {
        $this->codigoFuncionario = $codigoFuncionario;
        $this->cargoFuncionario = $cargoFuncionario;
        $this->contrato = $contrato;
        $this->salario = $salario;
        $this->dataContratacao = $dataContratacao;
    }

    public function getCodigoFuncionario(): int
    {
        return $this->codigoFuncionario;
    }

    public function getCargoFuncionario(): string
    {
        return $this->cargoFuncionario;
    }

    public function getContrato(): string
    {
        return $this->contrato;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function getDataContratacao(): DateTime
    {
        return $this->dataContratacao;
    }

    public function setCodigoFuncionario(int $codigoFuncionario): void
    {
        $this->codigoFuncionario = $codigoFuncionario;
    }

    public function setCargoFuncionario(string $cargoFuncionario): void
    {
        $this->cargoFuncionario = $cargoFuncionario;
    }

    public function setContrato(string $contrato): void
    {
        $this->contrato = $contrato;
    }

    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    public function setDataContratacao(DateTime $dataContratacao): void
    {
        $this->dataContratacao = $dataContratacao;
    }
}
