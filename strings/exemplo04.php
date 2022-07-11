<?php

$frase   = "A repetição é mãe da retenção";
$palavra = "mãe";

$qry = strpos($frase, $palavra);
var_dump($qry);
echo "<br>";

$texto = substr($frase, 0, $qry);
var_dump($texto);
echo "<br>";

$texto2 = substr($frase, $qry + strlen($palavra), strlen($frase));
var_dump($texto2);
echo "<br/>";

?>