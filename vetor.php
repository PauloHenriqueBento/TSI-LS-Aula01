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

echo "<br>";/*
$disciplina['PI'] = 'segunda';
$disciplina['CMS'] = 'terca';
$disciplina['DD'] = 'terca';
$disciplina['BB'] = 'quarta';
$disciplina['LS'] = 'quinta';
$disciplina['Script'] = 'sexta';


foreach ( $disciplina as $aula => $dia){
    echo "A aula de $aula é: $dia <br>";
}*/


$disciplina['Segunda'][0] = "Pi";
$disciplina['Terca'][0] = "CMS";
$disciplina['Terca'][1] = "Direito";
$disciplina['Quarta'][0] = "Banco";
$disciplina['Quinta'][0] = "PhP";
$disciplina['Sexta'][0] = "JavaScript";

echo "<br>";

foreach( $disciplina as $dia => $disciplina){

    echo "Aula(s) na $dia ";

    foreach( $disciplina as $disciplina ){

        echo "$disciplina, ";
    }

    echo "<br>";
}

include('linkform.html');