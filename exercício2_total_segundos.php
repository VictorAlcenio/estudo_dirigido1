<?php

//Escreva um programa que leia a quantidade de dias, horas, minutos e segundos do usuário. Calcule o total em segundos.

print "Escreva uma quantidade de dias: ";
$dias=(float)fgets(STDIN);

print "Escreva uma quantidade de horas: ";
$horas=(float)fgets(STDIN);

print "Escreva uma quantidade de minutos: ";
$minutos=(float)fgets(STDIN);

print "Escreva uma quantidade de segundos: ";
$segundos=(float)fgets(STDIN);

$total_segundos= ($dias*24*60*60)+($horas*60*60)+($minutos*60)+$segundos;
print"A quantidade total de segundos obtidos nesse tempo foi de: $total_segundos segundos";

?>
