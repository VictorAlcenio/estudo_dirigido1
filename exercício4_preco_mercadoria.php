<?php

//Solicite o preço de uma mercadoria e o percentual de desconto. Exiba o valor do desconto e o preço a pagar.

print "Qual o preço da mercadoria? ";
$preco=(float)fgets(STDIN);
print "Qual o seu percentual de desconto? ";
$percentual_desconto=(float)fgets(STDIN);

$valor_desconto = ($percentual_desconto*$preco)/100;
print "O valor do desconto é $valor_desconto \n";

$preco_com_desconto = $preco-$valor_desconto;
print "Voce irá pagar $preco_com_desconto pela mercadoria";

?>
