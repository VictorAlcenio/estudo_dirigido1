<?php

//(DESAFIO) Faça um Programa para uma loja de tintas. O programa deverá pedir o tamanho em metros
quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 6 metros
quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00 ou em galões de 3,6 litros,
que custam R$ 25,00. Informe ao usuário as quantidades de tinta a serem compradas e os respectivos
preços em 3 situações:
a. comprar apenas latas de 18 litros;
b. comprar apenas galões de 3,6 litros;
c. misturar latas e galões, de forma que o preço seja o menor. Acrescente 10% de folga e sempre
arredonde os valores para cima, isto é, considere latas cheias. 

print"Qual o tamanho em metros quadrados da área que será pintada?";
$metros_quadrados=(float)fgets(STDIN);


$quantidade_litros_lata= ($metros_quadrados/6);
$quantidade_latas= $quantidade_litros_lata/18;

if situacoes==1;
  $preco_latas= $quantidade_latas*80
    print"voce irá pagar $preco_latas pelas latas"
else
  
