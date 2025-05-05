<?php

class lampada{
    public $Fabricante;
    public $Tensão;
    public $Potencia;
    public $Cor;
    public $Status;

    public function Ligar(){
        $this->Status = True;
    }
    public function Desligar(){
        $this->Status = False;

    }
    public function MostrarDados(){
        echo "Fabricante: " . $this->Fabricante . "<br>";
        echo "Tensão: " . $this->Tensão . "<br>";
        echo "Potencia: " . $this->Potencia . "<br>";
        echo "Cor: " . $this->Cor . "<br>";
        if ($this->Status == True){
            echo "Está ligada?: SIM <br>";
        }else
        echo "Está ligada?: NÃO <br> "; 

    }
}

?>