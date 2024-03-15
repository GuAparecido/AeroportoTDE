<?php
class Embarque
{
    public string $quantidade_embarque;
    public int $bagagem_mao;

    public function __construct($quantidade_embarque, $bagagem_mao)
    {
        $this->quantidade_embarque = $quantidade_embarque;
        $this->bagagem_mao = $bagagem_mao;
    }

    public function getQuantidade_embarque(): int{
        return $this->quantidade_embarque;
    }
    public function setQuantidade_embarque($quantidade_embarque): void{
        $this->quantidade_embarque = $quantidade_embarque;
    }

    public function getBagagem_mao(): string{
        return $this->bagagem_mao;
    }
    public function setBagagem_mao($bagagem_mao): void{
        $this->bagagem_mao = $bagagem_mao;
    }
}