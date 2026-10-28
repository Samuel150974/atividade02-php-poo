<?php

class Moto extends Veiculo
{
    public function __construct(
        string $marca,
        string $modelo,
        int $ano,
        float $diaria,
        private int $cilindradas,
    ) {
        parent::__construct($marca, $modelo, $ano, $diaria);
    }

    public function getCilindradas(): int
    {
        return $this->cilindradas;
    }
}