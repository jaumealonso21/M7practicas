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
foreach($extras as $extra)
print("$extra<BR>\n");

/*$actualizar = $_REQUEST['actualizar'];
if($actualizar)
  print("Se han actualizado los datos");
*/
?>
</BODY>
</HTML>