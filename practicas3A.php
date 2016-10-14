<?php 

include("funciones.php");

   $fichero = "curriculum.pdf"; 
   $extension = calcula_extension ($fichero);
   $tipo = tipo_fichero ($extension); 
   print ("El fichero '$fichero' es de tipo '$tipo'.\n");
   
   print "<br /><br />\n";  
   print "<h1>Manejo de cadenas</h1>\n";
   print "<h3>Ejemplo 2</h3>\n";
   
   $texto = "uno-dos-tres-cuatro-cinco";
   $num = contador($texto);
   print "Numero de elementos de '$texto' es $num\n";
   
   print "<ul>\n";
   foreach (explode('-', $texto) as $valor) {
       print "<li>$valor</li>\n";
   }
   print "</ul>\n";
?> 