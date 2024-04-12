<?php
    date_default_timezone_set('America/Sao_Paulo');
    class Conta{
        //atributos 
        public $saldo;
        
        //metodos
        public function getSaldo(){
            return $this->saldo;
        }
        public function exibirSaldo(){
            $dataAtual = Date('d/m/Y');
            echo "\nA data hoje, $dataAtual, e seu saldo {$this->getSaldo()}";
        }

        public function sacar($valor){
            $this->saldo -= $valor;
        }
    }
?>