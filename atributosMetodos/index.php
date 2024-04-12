<?php
   include 'Pessoa.php';
   include 'Conta.php';

    $conta1 = new Conta();

    $conta1->saldo = 1000.00;

    echo "O saldo da conta é: {$conta1->getSaldo()}";

    echo "{$conta1->exibirSaldo()}";
    
    $conta1->sacar(100);

    echo "{$conta1->exibirSaldo()}";





   //instanciar a classe pessoa
   //criacao de objeto
  /* $pessoa1 = new Pessoa(); 
   $usuario01 = new Pessoa();
   $usuario02 = new Pessoa();

   $pessoa1->nome = "Pedro";
   $pessoa1->idade = 10;

   echo "O nome é: {$pessoa1->nome} e a idade: {$pessoa1->idade}"; 

   $usuario01->nome = "Rubens";
   $usuario02->nome = "Maria";
   
   echo "\nPrimeiro usuario: {$usuario01->nome}";
   echo "\nSegundo usuario: {$usuario02->nome}";*/

?>