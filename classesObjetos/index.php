<?php

    include 'Pessoa.php';

    $pessoa1 = new Pessoa();

    $pessoa2 = new Pessoa();

    //visualizando o estado do objeto pessoa 1
    var_dump($pessoa1);

    echo '<pre>';
    print_r($pessoa1);

    //visualizando o estado do objeto pessoa 2
    var_dump($pessoa2);

    echo '<pre>';
    print_r($pessoa2);


?>