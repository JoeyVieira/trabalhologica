php
print "* Contas BAR * \n\n";
 print "Qual o sexo do cliente?( F/M ):";
 $sexo = trim(fgets(STDIN));
 
 print "Quantidade de cervejas consumidas:";
 $cerva = trim(fgets(STDIN));
 
 print "Quantidade de refrigerantes consumidos: ";
 $refri = trim(fgets(STDIN));
 
 print "Quantidade de espetos consumidos: ";
 $espetos = trim(fgets(STDIN));
 
 $cervap = 2.50 * $cerva;
 $refrip = 2 * $refri;
 $espetosp = 4 * $espetos;
 
 
 if ($sexo = "m") {
 	$sexo1 = 10 ;
 }
 elseif ($sexo = "f") {
 	 $sexo1 = 8 ;
 	}
$valor = $cervap + $refrip + $espetosp + $sexo1 ;

 if ( $valor > 15 ) {
 	$musico = 0 ;
 }
 else {
 	$musico = 3 ;
 }

$valor = $cervap + $refrip + $espetosp + $sexo1 + $musico ; 
 	
$comes = $cervap + $refrip + $espetosp ; 

$valort = ($valor + ($valor / 10)) ;

print " \nR$ " . $sexo1 . " ( Valor Basico ) " ;
print " \nR$ " . $comes . " ( Total consumido comida e bebida )" ;
print " \nR$ " . $musico . " ( Valor pago aos cantores ) " ;
print " \nR$ " . $valor . " ( Subtotal sem os 10% ) " ;
print "\n______________________________________________" ;
print " \nR$ " . $valort . " (Total )" ;
