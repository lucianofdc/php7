<?php
 
 /*
 comentário em bloco.
 podendo inserir várias linhas. 
 
 $anoNascimento = 1975; //..int
 $nomeCompleto  = "Luciano Carvalho"; //..string
 $valor = 10.52; //..float

 */

 // comentário de uma linha.


 $nome = "Luciano";
 $sobrenome = "Carvalho";
 $nomeCompleto = $nome . " " . $sobrenome; //..concatenação de strings
 
 echo $nomeCompleto; //..exibe: Luciano Carvalho
 exit; //..para o processamento...



 echo $nome;
 echo "<br/>";
 unset($nome); //..vazio..

 if (isset($nome)) {
 	echo $nome;
 }else{
 	echo 'variável <strong>$nome</strong> não definida';
 }


?>