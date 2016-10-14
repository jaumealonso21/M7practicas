<HTML>
<BODY>
<?PHP
$edad = $_REQUEST['edad'];
print ("La edad es: $edad");

$cadena = $_REQUEST['cadena']; 
print ($cadena);

$sexo = $_REQUEST['sexo'];
print ($sexo);

$extras = $_REQUEST['extras'];
foreach($extras as $extra) {
    print("$extra<BR>\n");
}
$fichero = $_REQUEST['fichero'];
print (" $fichero<br />\n");
$username = $_REQUEST['username'];
print (" $username<br />\n");
$clave = $_REQUEST['clave'];
print (" $clave<br />\n");
$enviar = $_REQUEST['enviar'];
if ($enviar) { print ("Se ha pulsado el botón de enviar<br />\n"); }
$color = $_REQUEST['color'];
print ("$color<br />\n");
$idiomas = $_REQUEST['idiomas'];
foreach ($idiomas as $idioma) { print ("$idioma<BR>\n"); }
$comentario = $_REQUEST['comentario'];
print ("$comentario<br />\n");
/*$actualizar = $_REQUEST['actualizar'];
if($actualizar)
  print("Se han actualizado los datos");
*/
?>
</BODY>
</HTML>