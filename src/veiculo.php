<?php

abstract class Veiculo
{



    public function __construct(
        private string $marca,
        private string $modelo,
        private int $ano,
        private float $diaria
    ) {}

public function getMarca(): string{
    return $this->marca;
}

public function getModelo(): string{
    return $this->modelo;
}

public function getAno(): int{
    return $this->ano;
}

public function getDiaria(): float{
    return $this->diaria;
}

public function calcularDiaria(int $dias): float{
    return $this->diaria * $dias;
}




}
