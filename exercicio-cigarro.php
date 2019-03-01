<?php


    $quantidade_cigarro = 10 *365*3;
    $minutos_perdidos   = $quantidade_cigarro * 11;
    $horas_perdidas     = $minutos_perdidos/60;
    $dias_perdidos      = $horas_perdidas/24;

    
    print "\nVocê perdeu $dias_perdidos de vida\n";

?>