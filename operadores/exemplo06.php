<?php

$a = NULL;
$b = NULL;
$c = 10;

//Existe ainda o operador "??" (ou null coalescing), disponível desde o PHP 7.
echo $a ?? $b ?? $c;

?>