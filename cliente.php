<?php
class Cliente extends Pessoa
{
    private int $codigoCliente;
    private DateTime $dataNascimento;

    public function __construct(int $codigoCliente, DateTime $dataCadastro, string $nome, DateTime $dataNascimento, string $cpf, string $rg, string $endereco)
    {
        $this->codigoCliente = $codigoCliente;
        $this->dataNascimento = $dataNascimento;
        parent::setNome($nome);
        parent::setDataNascimento($dataNascimento);
        parent::setCpf($cpf);
        parent::setRG($rg);
        parent::setEndereco($endereco);

    }

    public function getCodigoCliente(): int
    {
        return $this->codigoCliente;
    }

    public function getDataNascimento(): DateTime
    {
        return $this->dataNascimento;
    }

    public function setCodigoCliente(int $codigoCliente): void
    {
        $this->codigoCliente = $codigoCliente;
    }

    public function setDataNascimento(DateTime $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;
    }
}
