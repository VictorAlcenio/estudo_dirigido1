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
$metros_quadrados = (float)fgets(STDIN);



//lata
$lata_preco = 80;
$latas_rendimento = 108; //18*6

//galao
$galao_preco = 25;
$galao_rendimento = 21.6; //6*3.6


// a)
$latas_quantidade = ceil($metros_quadrados/$latas_rendimento);
$lata_custo = $latas_quantidade * $lata_preco;

print "\nSerá necessário $latas_quantidade lata(s) ao custo de $lata_custo reais \n";

print "--------------------------------------------------------------------------\n";

// b)

$galao_quantidade = ceil($metros_quadrados/$galao_rendimento);
$galao_custo = $galao_quantidade * $galao_preco;

print "Será necessário $galao_quantidade galão(oẽs) ao custo de $galao_custo reais \n";

print "--------------------------------------------------------------------------\n";

// c)

$latas_quantidade = (int) ($metros_quadrados/$latas_rendimento);
$latas_resto = $metros_quadrados % $latas_rendimento;
$galao_custo = ceil($latas_resto/$galao_rendimento);

$total_custo = $latas_quantidade * $lata_custo + $galao_quantidade * $galao_custo;

print "Será necessário $latas_quantidade latas e $galao_quantidade galao(oes)\n";
print "O custo total foi de $total_custo reais";


?>









