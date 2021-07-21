<?php

require_once "src/search.php";
use Lucas\cep\Search;

$busca = new Search();

$resultado = $busca->getAdressFromZipCode('58432672');

print_r($resultado);
?>