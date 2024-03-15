<?php
class Passagem 
{
    public int $codigo_passagem;
    public int $codigo_voo;
    public int $numero_assento;
    public string $nome_passageiro;
    public int $guiche_embarque;

    public function __construct($codigo_passagem, $codigo_voo, $numero_assento, $nome_passageiro, $guiche_embarque)
    {
        $this->codigo_passagem = $codigo_passagem;
        $this->codigo_voo = $codigo_voo;
        $this->numero_assento = $numero_assento;
        $this->nome_passageiro = $nome_passageiro;
        $this->guiche_embarque = $guiche_embarque;
    }

    public function getCodigo_Passagem(): int{
        return $this->codigo_passagem;
    }

    public function setCodigo_Passagem($codigo_passagem): void{
        $this->codigo_passagem = $codigo_passagem;
    }

    public function getCodigo_Voo(): string{
        return $this->codigo_voo;
    }

    public function setCodigo_Voo($codigo_voo): void{
        $this->codigo_voo = $codigo_voo;
    }

    public function getNumero_Assento(): int{
        return $this->numero_assento;
    }

    public function setNumero_Assento($numero_assento): void{
        $this->numero_assento = $numero_assento;
    }

    public function getNome_Passageiro(): string{
        return $this->nome_passageiro;
    }

    public function setNome_Passageiro($nome_passageiro): void{
        $this->$nome_passageiro = $nome_passageiro;
    }

    public function getGuiche_Embarque(): int{
        return $this->guiche_embarque;
    }

    public function setGuiche_Embarque($guiche_embarque): void{
        $this->guiche_embarque = $guiche_embarque;
    }
}

