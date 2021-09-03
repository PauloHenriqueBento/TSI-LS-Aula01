<?php
 
 //Comentario de linha única

 ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

 /*
 comentário de multipla linha
 */

 $nome = 'Paulo';

 echo 'Olá, ' . $nome. '!<br><br>'; //Concatenado

 echo "Olá, $nome"; //Não concatenado

 if( $nome == 'Paulo') {
    echo '<br><br> O nome é igual';
 }else{
     echo '<br><br> Nome diferente';
 }

 for ( $i = 0; $i < 10; $i++){
     echo "Linha $i <br>";
 }

 echo '<br> 2 + 2 =' . (2 +2) . '!<br><br>';

$dia = 'sexta';

switch($dia){
    case 'segunda':
        echo 'Estude!';
    break;
    
    case 'terça':
        echo 'Vá para a aula de CMS!';
    break;

    case 'quarta':
        echo 'Vá para BD';
    break;

    case 'sexta':
        echo 'Vá para kambuka';
    break;

    default:
        echo 'Vá descansar';
    break;
}

echo '<br><br>';

$animal = 'cachorro';

$tipo = $animal == 'cachorro' ? 'mamifero' : 'desconhecido';

echo "Animal é do tipo $tipo";

$sobrenome_informado = "Bento";
$sobrenome = $sobrenome_informado ?? "não informado" ;

echo "<br><br> $sobrenome";

$i =0;
while ( $i < 10 ){

    echo "Essa é a linha $i <br>";
    $i++;
}
echo "<br> <br> While:<br>";
$i = 0;
do{
    echo "Essa é a linha $i <br>";
    $i++;
}while($i < 10);

//Como chamar outros códigos 

include 'link.html'; //Se não existir link.html dar erro mas continua execução

require 'link.html'; // se não encontrar, dar erro e interrompe execução 

include_once 'link.html'; //verifica se já foi incluido antes, se sim, não inclui novamente 

require_once 'link.html';// Verifica se já foi incluido antes, se sim, não inclui novamente