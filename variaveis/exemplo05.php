<?php

//..Escopo de variável...
$nome = "Luciano";

function teste(){
 
  global $nome;
  echo $nome;
 
}

function teste2(){

  $nome = "João";
  echo $nome . " (agora no teste2)";
 
}

teste();

echo "<br/>";

teste2();

?>