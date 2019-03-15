<?php

//Faça um programa que calcule o aumento de um salário. Ele deve solicitar o valor do salário e a porcentagem do aumento. Exiba o valor do aumento e do novo salário.
  
print "Apresente seu salário: ";
$salario=(float)fgets(STDIN);
print "Qual a porcentagem de aumento que receberá? ";
$porcentagem_aumento=(float)fgets(STDIN);

$valor_aumento = ($porcentagem_aumento*$salario)/100;
print "O valor do seu aumneto será de $valor_aumento\n";

$novo_salario= $salario+$valor_aumento;
print "Seu novo salário será de $novo_salario";

?>
