<?php

class conta{
    public $nome;
    public $Cpf;
    private $Saldo;

    public function Sacar($valor){
        if  ($this->Saldo<$valor){
            return "Saldo insuficiente";
        }else{
            $this->Saldo = $this->Saldo - $valor;
            $texto = "Depósito realizado. Saldo atual é de R$ " . $this->Saldo;
            return $texto;

        }
        
        return $this->Saldo;
    }
    public function Depositar($valor){
        $this->Saldo += $valor;
        $texto = "Depósito realizado. Saldo atual é de R$ " . $this->Saldo;
        return $texto;
    }

    public function MostrarSaldo(){
        echo "Nome do cliente: " . $this->Nome . "<br>";
        echo "CPF do cliente: " . $this->Cpf . "<br>";
        echo "Saldo do cliente: " . $this->Saldo . "<br>";
    }
}

?>