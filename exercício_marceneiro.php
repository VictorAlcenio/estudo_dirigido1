<?php

//Um marceneiro para fazer um trabalho, precisa cortar os pedaços de madeira com 45cm cada, ele pode comprar tabuas de 3,4 e 5 metros. Precisa saber a sobra de cada

$quantidade_madeira_3metros= (int) (300/45);
$madeira_3metrosS= 300%45;
print "Se ele escolher a madeira de 3 metros comprará: $quantidade_madeira_3metros madeiras, e sobrará: $madeira_3metrosS centimetros.\n";

$quantidade_madeira_4metros= (int) (400/45);
$madeira_4metrosS= 400%45;
print "Se ele escolher a madeira de 4 metros comprará: $quantidade_madeira_4metros madeiras, e sobrará: $madeira_4metrosS centimetros.\n";

$quantidade_madeira_5metros= (int) (500/45);
$madeira_5metrosS= 500%45;
print "Se ele escolher a madeira de 5 metros comprará: $quantidade_madeira_5metros madeiras, e sobrará: $madeira_5metrosS centimetros.";
