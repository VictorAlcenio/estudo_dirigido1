<?php

//Escreva um programa que pergunte a quantidade de km percorridos por um carro alugado pelo usuário,assim como a quantidade de dias pelos quais o carro foi alugado. Calcule o preço a pagar, sabendo que o carro custa R$ 60,00 por dia e R$ 0,15 por km rodado.

print "Quantos quilometros foram percorridos pelo seu carro alugado? ";
$quilometros=(float)fgets(STDIN);
print "Quantos dias voce ficou com ele? ";
$dias=(float)fgets(STDIN);

$preco = ($dias*60) + ($quilometros*0.15);
print "Voce irá pagar $preco reais pelo aluguel do carro";

?>

