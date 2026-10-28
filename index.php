<?php
require_once "src/veiculo.php";
require_once  "src/carro.php";
require_once "src/moto.php";



$carro = new Carro('Toyota', 'Corolla', 2022, 150.00, 4);
$moto = new Moto('Honda', 'CB 500', 2023, 70.00, 500);

$total = $carro->calcularDiaria(5);

$total = $moto->calcularDiaria(5);

$formatarDiaria = static fn (float $valor): string => number_format($valor, 2, ',', '.');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de veículos</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Veículos para alugar</h1>
        <p>Escolha o veículo ideal para sua próxima viagem.</p>
    </header>

    <main class="conteudo">
        <section class="lista-veiculos">
            <article class="cartao">
                <span class="tipo">Carro</span>
                
                <h2>
                    <?= $carro->getMarca(). ' ' .$carro->getModelo()?>
                </h2>
                
                <p class="detalhe">
                    Ano: <?= $carro->getAno() ?>
                </p>
                
                <p class="detalhe">
                    Portas: <?= $carro->getPortas() ?>
                </p>
                
                <p class="preco">
                    Diária: R$ <?= $formatarDiaria($carro->getDiaria()) ?>
                </p>
            </article>

            <article class="cartao">
                <span class="tipo">Moto</span>
                <h2>
                    <?= $moto->getMarca() . ' ' . $moto->getModelo() ?>
                </h2>

                <p class="detalhe">
                    Ano: <?= $moto->getAno() ?>
                </p>
                
                <p class="detalhe">
                    Cilindradas: <?= $moto->getCilindradas() ?> cc
                </p>
                <p class="preco">
                    Diária: R$ <?= $formatarDiaria($moto->getDiaria()) ?>
                </p>
            </article>
        </section>
    </main>

    <footer class="rodape">
        <p>Catálogo demonstrativo de veículos para aluguel.</p>
    </footer>
</body>
</html>
