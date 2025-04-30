<?php

include_once 'Pessoas.class.php';


// criar um objeto - instancia da classe pessoa
$fulano = new Pessoa();
$ciclano = new Pessoa();

//var_dump($fulano);

// atribuir valores

$fulano->Nome = "Fulano da Silva";
$fulano->Peso = 90;
$fulano->Altura = 1.82;



$ciclano->Nome = "Ciclano da Silva";
$fulano->Peso = 78;
$fulano->Altura = 1.50;


// fulano chamando um metodo da classe pessoa

$fulano->MostrarDados();
$ciclano->MostrarDados();




?>