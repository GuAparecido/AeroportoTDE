<?php
class Servico extends Carga
{
    private int $codigoServico;
    private string $tipoServico;
    private Carga $tipoCarga;

    public function __construct(int $codigoServico, string $tipoServico, Carga $tipoCarga)
    {
        $this->codigoServico = $codigoServico;
        $this->tipoServico = $tipoServico;
        $this->tipoCarga = $tipoCarga;
    }

    public function getCodigoServico(): int
    {
        return $this->codigoServico;
    }

    public function getTipoServico(): string
    {
        return $this->tipoServico;
    }

    public function getTipoCarga(): Carga
    {
        return $this->tipoCarga;
    }

    public function setCodigoServico(int $codigoServico): void
    {
        $this->codigoServico = $codigoServico;
    }

    public function setTipoServico(string $tipoServico): void
    {
        $this->tipoServico = $tipoServico;
    }

    public function setTipoCarga(Carga $tipoCarga): void
    {
        $this->tipoCarga = $tipoCarga;
    }
}
