<?php
class Embarque
{
    private Voo $voo;
    private int $quantidadeEmbarcados;
    private int $quantidadeBagagem;

    public function __construct(Voo $voo, int $quantidadeEmbarcados, bool $quantidadeBagagem)
    {
        $this->voo = $voo;
        $this->quantidadeEmbarcados = $quantidadeEmbarcados;
        $this->quantidadeBagagem = $quantidadeBagagem;
    }

    public function getVoo(): Voo
    {
        return $this->voo;
    }

    public function getQuantidadeEmbarcados(): int
    {
        return $this->quantidadeEmbarcados;
    }

    public function getQuantidadeBagagem(): int
    {
        return $this->quantidadeBagagem;
    }

    public function setVoo(Voo $voo): void
    {
        $this->voo = $voo;
    }

    public function setQuantidadeEmbarcados(int $quantidadeEmbarcados): void
    {
        $this->quantidadeEmbarcados = $quantidadeEmbarcados;
    }

    public function setQuantidadeBagagem(int $quantidadeBagagem): void
    {
        $this->quantidadeBagagem = $quantidadeBagagem;
    }
}
