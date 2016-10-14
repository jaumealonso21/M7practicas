<!DOCTYPE html>
<HTML LANG="es">
<HEAD>
 <TITLE>Práctica 3</TITLE>
 <meta charset="UTF-8" />
</HEAD>
<BODY>
<h1>Conversión euros/pesetas</h1>
<p>
<?PHP
  define ("CONV", 166.386);
  $i = 1;
  $fi = 10;
  
  for($i; $i <= $fi; $i++)
    print $i." € = ". $i*CONV." pta.<br />\n";
?>
</p>
</BODY>
</HTML> 