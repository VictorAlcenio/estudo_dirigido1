<?php

//(DESAFIO) Faça um Programa para uma loja de tintas. O programa deverá pedir o tamanho em metros
//quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 6 metros
//quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00 ou em galões de 3,6 litros,
//que custam R$ 25,00. Informe ao usuário as quantidades de tinta a serem compradas e os respectivos
//preços em 3 situações:
//a. comprar apenas latas de 18 litros;
//b. comprar apenas galões de 3,6 litros;
//c. misturar latas e galões, de forma que o preço seja o menor. Acrescente 10% de folga e sempre
//arredonde os valores para cima, isto é, considere latas cheias. 

print "Qual o tamanho em metros quadrados da área que será pintada? ";
$metrosquadrados = (float)fgets(STDIN);



//lata
$latapreco = 80;
$latasrendimento = 108; //18*6

//galao
$galaopreco = 25;
$galaorendimento = 21.6; //6*3.6


// a)
$latasquantidade = ceil($metrosquadrados/$latasrendimento);
$latacusto = $latasquantidade * $latapreco;

print "\nSerá necessário $latasquantidade lata(s) ao custo de $latacusto reais \n";

print "--------------------------------------------------------------------------\n";

// b)

$galaoquantidade = ceil($metrosquadrados/$galaorendimento);
$galaocusto = $galaoquantidade * $galaopreco;

print "Será necessário $galaoquantidade galão(oẽs) ao custo de $galaocusto reais \n";

print "--------------------------------------------------------------------------\n";

// c)



