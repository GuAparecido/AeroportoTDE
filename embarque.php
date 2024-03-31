<?php
class Embarque
{
    private Voo $voo;
    private int $quantidadeEmbarcados;
    private int $bagagemMao;

    public function __construct(Voo $voo, int $quantidadeEmbarcados, bool $bagagemMao)
    {
        $this->voo = $voo;
        $this->quantidadeEmbarcados = $quantidadeEmbarcados;
        $this->bagagemMao = $bagagemMao;
    }

    public function getVoo(): Voo
    {
        return $this->voo;
    }

    public function getQuantidadeEmbarcados(): int
    {
        return $this->quantidadeEmbarcados;
    }

    public function getBagagemMao(): int
    {
        return $this->bagagemMao;
    }

    public function setVoo(Voo $voo): void
    {
        $this->voo = $voo;
    }

    public function setQuantidadeEmbarcados(int $quantidadeEmbarcados): void
    {
        $this->quantidadeEmbarcados = $quantidadeEmbarcados;
    }

    public function setBagagemMao(int $bagagemMao): void
    {
        $this->bagagemMao = $bagagemMao;
    }
}
