<?php

$nome = "xdeveloper";
$site = 'www.xdeveloper.com.br';

$ano = 1975;
$salario = 5500.99;
$bloqueado = false;

$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2];
echo "<br/>";


$nascimento = new DateTime();
var_dump( $nascimento );
echo "<br/>";


$arquivo = fopen("exemplo03.php", "r");
var_dump( $arquivo );
echo "<br/>";


$nulo = null; //..ausência de valor..
var_dump( $nulo );



?>