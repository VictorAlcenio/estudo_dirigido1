<?php

//Escreva um programa que leia a quantidade de dias, horas, minutos e segundos do usuário. Calcule o total em segundos.

$quantidade_dias= 5;
$quantidade_horas= 3;
$quantidade_minutos= 45;
$quantidade_segundos= 2;

print" O usuario tem: $quantidade_dias dias, $quantidade_horas horas, $quantidade_minutos minutos e $quantidade_segundos segundos\n";

$total_segundos= ($quantidade_dias*24*60*60) + ($quantidade_horas*60*60) + ($quantidade_minutos*60) + $quantidade_segundos;
print" A quantidade total são: $total_segundos segundos";

