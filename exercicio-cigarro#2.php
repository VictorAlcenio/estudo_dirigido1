<?php

    print "\nhá quantos tempo você fuma? ";
    $anos_fumados=fgets(STDIN);


    
    $quantidade_cigarro = 10 *365*$anos_fumados;
    $minutos_perdidos   = $quantidade_cigarro * 11;
    $horas_perdidas     = $minutos_perdidos/60;
    $dias_perdidos      = round($horas_perdidas/24);

   
    
    print "\nVocê perdeu $dias_perdidos dias de vida\n";

?>