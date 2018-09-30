<?php

require_once("config.php");

use cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djamal Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");


print_r($cad);
echo $cad;

$cad->registrarVenda();

?>

