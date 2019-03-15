<?php

//Calcule o tempo de uma viagem de carro. Pergunte a distância a percorrer e a velocidade média esperada para a viagem.

print "Qual a distância que você irá percorrer (km) ? ";
$distancia=(float)fgets(STDIN);

print "Qual é a velocidade média esperada (km/h) ? ";
$velocidade=(float)fgets(STDIN);

$tempo_viagem = $distancia/$velocidade;
print "O tempo da viagem será de $tempo_viagem h";

?>
