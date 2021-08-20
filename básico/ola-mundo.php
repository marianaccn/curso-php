<?php 

$idade = 16;
$numeroDePessoas = 3;

echo "Entrada permitida a partir de 18 anos, ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18){
    echo "Você tem $idade anos, pode entrar sozinho" . PHP_EOL; 
    }else if ($idade >= 16 && $numeroDePessoas > 1){
        echo "Você tem $idade anos, está acompanhado(a), pode entrar";
    } else {
        echo "Você só tem $idade anos. Você não pode entrar.";
    }

 