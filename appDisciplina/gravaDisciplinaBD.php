<?php

ini_set('display_errors', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);


$_POST['disciplina']  = $_POST['disciplina']    ?? '';
$_POST['professor']  = $_POST['professor']    ?? '';
$_POST['dia']   = $_POST['dia']     ?? '';
$_POST['descricao']  = $_POST['descricao']    ?? '';



if( empty($_POST['nome']) || empty($_POST['dia']) ){
    die('<br><br>ERRO! Os campos nome e dia são obrigatórios');
}

echo "A disciplina é " . $_POST['disciplina'];
echo "<br><br>O professor é " . $_POST['professor'];
echo "<br><br>na data " . $_POST['dia'];
echo "<br><br>Descrição da Aula: ". $_POST['descricao'];