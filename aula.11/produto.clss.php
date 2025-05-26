<?php

class Produto{
    private $nome;
    private $preco;
    private $quantidade;

    public function __construct($nome, $preco, $quantidade){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    
public function getNome(){
    return $this->nome;
}

public function setNome($nome){
     $this->nome = $nome;
}

public function getPreco(){
     return $this->preco;
}

public function setPreco($preco){
    $this->preco = $preco;
}

public function AdicionarEstoque($quantidade){
    if($quantidade > 0){
        $this->quantidade += $quantidade;
    }
}

public function removerEstoque($quantidade){
    if ($quantidade > 0 && $quantidade <= $this->quantidade){
        $this->quantidade -= $quantidade;
    }
}

public function mostrarDetalhes(){
    echo "Produto: " . $this->nome . "\n";
    echo "Preço: R$" . number_format($this->preco, 2, ',', '.') . "\n";
    echo "Quantidade em estoque: " . $this->quantidade . "\n";
    echo "Valor total em estoque: R$ " . number_format($this->preco*$this->quantidade, 2, ',' , '.') . "\n";
}
}


?>