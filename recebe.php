<?php
//$variavel= $_POST[];//variavel de recebimento pelo lado do servidor
//var_dump($_POST);//Mostrando os dados digitados nos campos
$_POST['email'] = $_POST['email'] ?? 'Não informado';//if ternário

$_POST['password'] = isset($_POST['password']) ? $_POST['password'] : 'Não informado';

echo "Seu email é " . $_POST['email'] . " e sua senha é " . $_POST['password'];

//phpinfo();