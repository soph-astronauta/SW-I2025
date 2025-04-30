<?php

     class Pessoa{
        //atributo
        public $Nome;
        public $Peso;
        public $Altura;
        
        //métodos
        public function MostrarDados(){
            echo "O nome é: " . $this->$Nome . "<br>";
            echo "O peso é: " . $this->$Peso . "<br>";
            echo "O altura é: " . $this->$Altura . "<br>";
            echo "<hr>";
        }
    }

?>