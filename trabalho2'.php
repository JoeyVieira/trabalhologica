
<?php

 print "Total anual de rendimentos bancários:";
 $rendb = trim(fgets(STDIN));
 
 print "Total anual de rendimentos de salários ou serviços:";
 $rendss = trim(fgets(STDIN));
 
 print "total anual de outros rendimentos: ";
 $outr = trim(fgets(STDIN));
 
 print "Total anual de serviços medicos pagos: ";
 $servm = trim(fgets(STDIN));
 
 print "Total anual de serviços educacionais pagos: ";
 $serve = trim(fgets(STDIN));
 

 
 $irendb = ($rendb /5) ;
 
 if ( $rendss <= 8000) {
 	$irendss = isento ;
 }
 elseif ($rendss <= 24000 ) {
 	$irendss = (($rendss/20) * 3 ) ;
 }
 elseif ($rendss >= 24000) {
 	$irendss = ($rendss/10 * 2 ) ;
 }
 
 $ioutr = ($outr/10) ;
 $imposto = $irendss + $irendb + $ioutr ;
 $limabat = ( $imposto * 0.3 ) ;
 
 $abat = $servm + $serve ;
 
 if ( $abat >= $limabat ) {
 	$total = $imposto - ( $imposto * 0.3 ) ;
 	
 }
 else {
 	$total = $imposto - $abat ;
 	
 }
 
 print " \nTotal de Impostos " ;
 
 print "\nR$" . $irendb . " (Impostos sobre rendimentos bancários.) " ;
 print "\nR$" . $irendss . " ( Sobre salários e Servicos ) " ;
 print "\nR$" . $ioutr . " ( Sobre outros Rendimentos )" ;
 print "\nR$" . $imposto . " ( Total )" ;
 
 print "\n---------------------------------------------------------------" ;
 
 print "\nMaximo a ser abatido " ;
 print ": \nR$ " . $limabat ;
 		
  
 print "\n---------------------------------------------------------------" ;
 
 print "\nTotal de valores possiveis de abater";
 print "\nR$" . $servm . " ( servicos medicos )" ;
 print "\nR$" . $serve . " ( servicos educacionais pagos )" ;
 print "\nR$" . $abat . " ( total )" ;
 
 print "\n---------------------------------------------------------------" ;
 
 print " \nimposto Total:" ;
 print "\nR$" . $imposto . " (imposto bruto. ) " ;
 print "\nR$" . $abat . " (abatimentos.) " ;
 print "\nR$" . $total . " ( Total.)" ;