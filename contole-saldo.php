<?php

$titular = "Pedro Henrique";
$saldoAtual = 1000;

echo "***************************" . PHP_EOL;
echo "Titular: $titular" . PHP_EOL;
echo "Saldo Atual: $saldoAtual" . PHP_EOL;
echo "***************************" . PHP_EOL;

do {


    echo "1. Consultar saldo atual" . PHP_EOL;
    echo "2. Sacar valor" . PHP_EOL;
    echo "3. Depositar valor" . PHP_EOL;
    echo "4. Sair" . PHP_EOL;

    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "***************************" . PHP_EOL;
            echo "Titular do Cartão: $titular" . PHP_EOL;
            echo "Saldo Atual: $saldoAtual" . PHP_EOL;
            echo "***************************" . PHP_EOL;
            break;

        case 2:
            echo "Qual valor deseja sacar?" . PHP_EOL;
            $valorASacar = (float) fgets(STDIN);

            if ($valorASacar > $saldoAtual) {
                echo "Saldo insuficiente" . PHP_EOL;
            } else {
                $saldoAtual -= $valorASacar;
            }
            break;

        case 3:
            echo "Quanto deseja depositar?" . PHP_EOL;
            $valorADepositar = (float) fgets(STDIN);
            $saldoAtual += $valorADepositar;

            break;
        case 4:
            echo "Até logo!" . PHP_EOL;

        default:
            echo "Opção inválida!";

            break;
    }
} while ($opcao != 4);
