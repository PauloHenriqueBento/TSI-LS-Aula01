<?php
 
 //Comentario de linha única

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

 echo '<br> 2 + 2 =' . (2 +2) . '!';