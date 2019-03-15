<?php

//Escreva um programa que leia um valor em metros e o exiba convertido em milímetros.

print "Quantos metros você quer converter?";
$metros= (float)fgets(STDIN);

$conversao= $metros*1000;
print"Sua conversão foi de $conversao milimetros.";
