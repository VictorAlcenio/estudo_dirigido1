<?php

//Um marceneiro para fazer um trabalho, preisa cortar os pedaços de madeira com 45cm cada, ele pode comprar tabuas de 3,4 e 5 metros. Precisa saber a sobra de cada

$quantidade_madeira= (int) (300/45);
$madeira_3metrosS= 300%45;
print "Se ele escolher a madeira de 3 metros comprará: $quantidade_madeira madeiras, e sobrará: $madeira_3metrosS centimetros.";
