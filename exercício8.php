<?php

//Escreva um programa para calcular a redução do tempo de vida de um fumante. Pergunte a quantidade
de cigarros fumados por dia e quantos anos ele já fumou. Considere que um fumante perde 10 minutos
de vida a cada cigarro, calcule quantos dias de vida um fumante perderá. Exiba o total de dias.
  
print"Quantos cigarros voce fuma por dia?";
$quantidade_cigarros_dia=(float)fgets(STDIN);

print"Quantos anos voce já fuma?";
$quantidade_anos=(float)fgets(STDIN);

$quantidade_dias= $quantidade_cigarros_dia*10*365*$quantidade_anos;
$minutos_perdidos= $quantidade_dias*11;
$horas_perdidas= $minutos_perdidos/60;
$dias_perdidos= round($horas_perdidas/24);

print"Voce irá perder $dias_perdidos dias de vida";
