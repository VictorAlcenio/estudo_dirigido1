<?php

//Converta uma temperatura digitada em Celsius para Fahrenheit. F = 9*C/5 + 32. 

print "Digite uma temperatura em graus celsius: ";
$temperatura_Celsius=(float)fgets(STDIN);

$temperatura_Fahrenheit = (9*$temperatura_Celsius)/5 + 32;
print "A temperatura convertida será de $temperatura_Fahrenheit Fahrenheit";

?>
                                  
