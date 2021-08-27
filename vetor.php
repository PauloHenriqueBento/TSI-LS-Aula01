<?php

$despesas[0] =  345.55;
$despesas[1] = 135.00;
$despesas[2] = 600.00;
$despesas[3] = 900.00;
$despesas[4] = 400.00;

for($i = 0; $i <5; $i++){
    echo $despesas[$i], "<br>";
}

unset($despesas);//Limpou o vetor

$despesas['mercado'] =  345.55;
$despesas['estacionamento'] = 135.00;
$despesas['alimentacao'] = 600.00;
$despesas['bar'] = 900.00;
$despesas['educacao'] = 400.00;

echo "<Br>Despesas<br>";

foreach ( $despesas as $nome => $gasto ) {
    echo "$nome: R$" . number_format($gasto, 2, ',', '.') . "<br>";
}

echo "<br> Atividade semanal <br>";
$semana['Domingo']          = 'Jogar';
$semana['Segunda-feira']    = 'Aula de PI';
$semana['Terça-feira']      = 'Aula de CMS e DD';
$semana['Quarta-feira']     = 'Aula de BD';
$semana['Quinta-feira']     = 'Aula de LS';
$semana['Sexta-feira']      = 'Aula de JavaScript';
$semana['Sabado']           = 'Aula de ingles na Cultura Inglesa';

foreach ( $semana as $dia => $atividade ) {
    echo "No dia $dia eu faço $atividade <br>";
}