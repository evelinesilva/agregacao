<?php

    require "Cliente.php";
    require "cartaoDeCredito.php";


    $cliente1 = new Cliente();
    $cliente1->nome = "Joana";
    $cliente1->email = "joana@email";

    $cartao1 = new cartaoDeCredito();
    $cartao1->cliente = $cliente1;
    $cartao1->numero = 123456;
    $cartao1->dataDeValidade = "01/03/2016";

    echo ("Testando Classe Cliente");

    echo ("$cliente1->nome");



 ?>
