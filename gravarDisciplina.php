<?php

ini_set('display_errors', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);


$_POST['disciplina']  = $_POST['disciplina']    ?? '';
$_POST['professor']  = $_POST['professor']    ?? '';
$_POST['dia']   = $_POST['dia']     ?? '';
$_POST['descricao']  = $_POST['descricao']    ?? '';

echo "A disciplina é " . $_POST['disciplina'];
echo "<br><br>O professor é " . $_POST['professor'];
echo "<br><br>na data " . $_POST['dia'];
echo "<br><br>Descrição da Aula: ". $_POST['descricao'];

if( empty($_POST['nome']) || empty($_POST['dia']) ){
    die('<br><br>ERRO! Os campos nome e dia são obrigatórios');
}

//abro o arquivo
$arquivo = fopen('bancodedados.csv', 'a');

$dia = $_POST['dia'] ?? date('Y-m-d');

//formatação de datas não muito elegante
//$dia = substr($dia, 8, 2) . '/' . substr($dia, 5, 2) . '/' . substr($dia, 0, 4);

//Formatação de datas mais elegante
$timestamp = strtotime($dia);
$dia = date('d/m/Y', $timestamp);
//Fim formatação de datas

//escrevo no arquivo
fwrite($arquivo, $_POST['disciplina'] . ';' . $_POST['professor'] . ';' . $dia . ';' . $_POST['descricao'] . ';' . $_SERVER['REMOTE_ADDR']."\r\n");
//fwrite( $arquivo, "{$_POST['disciplina']};{$_POST['professor']};{$_POST['dia']};{$_POST['descricao']}\r\n")

//fecho o arquivo
fclose($arquivo);

echo"<br><br> {$_POST['disciplina']} gravada com sucesso do IP {$_SERVER['REMOTE_ADDR']}!";

