<?php

    $meu_array = ["Meu primeiro array"];
    echo $meu_array [0];
    echo "\n";

    $meu_elemento = ["Meu primeiro elemento", "Meu segundo elemento"];
    echo $meu_elemento [0];
    echo "\n";
    echo $meu_elemento [1];
    echo "\n";

    $carro = ["Fusca", "New Beatle", "Ferrari", "DeLorean"];
    echo $carro [3];
    echo "\n";

    $nosso_veiculo = ["Yamaha rx", "Fusca", "Brasilia", "Yamaha ybr", "Gol"];
    echo $nosso_veiculo [0];
    echo "\n";
    echo $nosso_veiculo [1];
    echo "\n";
    echo $nosso_veiculo [2];
    echo "\n";
    echo $nosso_veiculo [3];
    echo "\n";
    echo $nosso_veiculo [4];
    echo "\n";

    $nosso_veiculo = ["primeiro" => "Yamaha rx", 
                      "segundo" => "Fusca",
                      "terceiro" => "Brasilia",
                      "quarto" => "Yamaha ybr", 
                      "quinto" => "Gol"
                     ];
    echo $nosso_veiculo ["terceiro"];
    echo "\n";

?>