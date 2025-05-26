<?php

include_once 'Produto.class.php';
$produto = new Produto("Mouse", 150.00,10);
$produto->AdicionarEstoque(5);
$produto->RemoverEstoque(3);
$produto->MostrarDetalhes();


?>