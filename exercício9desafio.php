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


$quantidade_folga= $metros_quadrados+ ($metros_quadradod*0.10);
$quantidade_litros= $quantidade_folga/6;


$valor_latas= 0;
$valor_galao= 0;
$latas= 0;
$galao= 0;
$quantidade_latas= 0;
$quantidade_galao= 0;
-----------------------------------------------------
$valor_lata_menorpreco= 0;
$valor_galao_menorpreco= 0;
$lata_menorpreco= 0;
$galao_menorpreco= 0;
$quantidade_lata_menorpreco= 0;
$quantidade_galao_menorpreco= 0;

  while ($latas < $quantidade_litros) {
    
  $latas= $latas + 18;
  $valor_latas= $valor_latas + 80;
  $quantidade_latas= $quantidade_latas + 1;
}
print "\n Para pintar $metros_quadrados metro(s) quadrato(s) poderá ser efetuada a compra de $quantidade_latas lata(s) de 18L, custando assim, R$ $valor_latas";

  while ($galao < $quantidade_litros) {
  
  $galao= $galao + 3.6;
  $valor_galao= $valor_galao + 25;
  $quantidade_galao= $quantidade_galao + 1;
}
print "\n Para pintar $metros_quadrados metro(s) quadrato(s) poderá ser efetuada a compra de $quantidade_galao galão(ões) de 3,6L, custando assim, R$ $valor_galao";

  while ( $quantidade_litros > 0){
    while ( $quantidade_litros >= 18) {
      $valor_lata_menorpreco = $valor_lata_menorpreco + 80;
      $quantidade_lata_menorpreco = $quantidade_lata_menorpreco + 1;
      $quantidade_litros= $quantidade_litros  - 18;  
  }
      $galao_menorpreco= $galao_menorpreco   + 3.6;
      $valor_galao_menorpreco= $valor_galao_menorpreco  + 25;
      $quantidade_galao_menorpreco= $quantidade_galao_menorpreco + 1;
      $quantidade_litros= $quantidade_litros  - 3.6;  
  
}
$valor_total_compra = $valor_galao_menorpreco + $valor_lata_menorpreco;
print "\n Para pintar $metros_quadrados metro(s) quadrato(s) poderá ser efetuada a compra de $quantidade_lata_menorpreco lata(s) de 18L, junto de $quantidade_galao_menorpreco galão(ões) de 3,6L custando assim, R$ $valor_total_compra \n";
echo "\n Está sendo levado em consideração um acréscimo de 10% do valor total da área \n";


  
