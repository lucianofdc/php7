<?php

//..interpolação de variáveis..

$nome = "Luciano";

$nome2 = "Treinamentos";

var_dump( $nome, $nome2);
echo "<br/>";

//..realiza a interpolação da variável..
echo "ABC $nome";
echo "<br/>";

//..não realiza a interpolação da variável..
echo 'ABC $nome';
echo "<br/>";

?>