<?php

//..variaveis super globais ou pré-definidas...
//$nome = (int)$_GET["a"];
//var_dump( $nome );

$ip = $_SERVER['REMOTE_ADDR'];
echo $ip;

echo "<br/>";

$file = $_SERVER['SCRIPT_NAME'];
echo $file;


?>