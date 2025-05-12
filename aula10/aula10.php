<?php

include_once 'Conta.class.php';

$conta1 = new Conta();

$conta1->Nome = "FULANO DA SILVA";
$conta1->Cpf = "123.456.789-00";

//$conta1->Salso = 1500;

$conta1->MostrarSaldo();

echo $conta1->Depositar(500);

echo "<br>";

$conta1->MostrarSaldo();

echo "<br>";

echo $conta1->Sacar(500);



?>