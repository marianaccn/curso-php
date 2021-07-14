<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12325678912 => [
    'titular' => 'Alberto',
    'saldo' => 300
    ]
];

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

$contasCorrentes ['12325678912'] ['saldo'] -= 500;

if (500 > $contasCorrentes['12325678912']['saldo']) {
    exibeMensagem("Saldo insuficiente");
} else {
    $contasCorrentes ['12325678912'] ['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem ($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}