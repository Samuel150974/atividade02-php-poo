<?php

class Carro extends Veiculo
{
    public function __construct(
        string $marca,
        string $modelo,
        int $ano,
        float $diaria,
        private int $portas,
    ) {
        parent::__construct($marca, $modelo, $ano, $diaria);
    }

    public function getPortas(): int
    {
        return $this->portas;
    }

    public function calcularDiaria(int $dias): float{
        return $this->getDiaria() * $dias;
    }
}