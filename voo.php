<?php
class Voo
{
    public int $codigo_voo;
    public int $passageiros;
    public string $tipo_servico;
    public float $local_partida;
    public float $local_destino;
    
    public function __construct($codigo_voo, $passageiros, $tipo_servico, $local_partida, $local_destino)
    {
        $this->codigo_voo = $codigo_voo;
        $this->passageiros = $passageiros;
        $this->tipo_servico = $tipo_servico;
        $this->local_partida = $local_partida;
        $this->local_destino = $local_destino;
    }

    public function getCodigo_Voo(): string{
        return $this->codigo_voo;
    }

    public function setCodigo_Voo($codigo_voo): void{
        $this->codigo_voo = $codigo_voo;
    }

    public function getNumero_Passageiros(): int{
        return $this->passageiros;
    }

    public function setNumero_Passageiros($passageiros): void{
        $this->passageiros = $passageiros;
    }

    public function getNome_Tipo_servico(): string{
        return $this->tipo_servico;
    }

    public function setNome_Tipo_servico($tipo_servico): void{
        $this->$tipo_servico = $tipo_servico;
    }

    public function getLocal_partida(): int{
        return $this->local_partida;
    }

    public function setLocal_partida($local_partida): void{
        $this->local_partida = $local_partida;
    }

    public function getLocal_destino(): int{
        return $this->local_partida;
    }

    public function setLocal_destino($local_destino): void{
        $this->local_destino = $local_destino;
    }
}