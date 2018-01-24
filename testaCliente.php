<?php

    require 'Cliente.php';
    require 'cartaoDeCredito.php';


    $cliente10 = new Cliente();
    $cliente10->nome = "Joana";
    $cliente10->email = "joana@email";

    $cartao10 = new cartaoDeCredito();
    $cartao10->cliente = $cliente10->nome;
    $cartao10->numero = 123456;
    $cartao10->dataDeValidade = "01/03/2016";

    echo "<h1>Testando Classe Cliente</h1> </br>" ;

    echo ("<h3>Cliente: $cliente10->nome</h3>");

    echo ("<h3> Cliente: $cartao10->cliente </h3>");

      $cl2 = new Cliente();

  $cl2->nome = "Rafael Cosentino";
  $cl2->codigo = "123";

    $cc2 = new cartaoDeCredito();
    $cc2->numero =  "111111";
    $cc2->dataDeValidade= "12/12/18";
    $cc2->cliente = $cl2->nome;

    echo ("<h3>Cliente: $cl2->nome</h3>");

    echo ("<h3> Cliente: $cc2->cliente </h3>");




 ?>
