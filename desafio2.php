<?php

$peso = 62;
$altura = 1.55;
$imc = $peso / $altura **2;

if ($imc < 24.9){
    echo 'Seu peso é normal';
}else if ($imc < 30){
    echo 'Você está com sobrepeso';
}else if ($imc > 30){
    echo 'Você está obeso';
}