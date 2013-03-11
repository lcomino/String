<?php

require_once('String/String.php');

$texto = "Teste pra ver se classe funciona! http://github.com se funcionar o link vai aparecer! http://www.fronteirasemfim.com.br";

$string = new String($texto);

echo $string->transformUrls();
