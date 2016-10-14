<!DOCTYPE html>
<HTML LANG="es">
<HEAD>
  <TITLE>Práctica 3_2</TITLE>
  <meta charset="UTF-8" />
  <style>
  	table, th, td {border: 1px solid black;}
  	td {text-align: center;}
  </style>
</HEAD>
<BODY>
<h1>Conversión euros/pesetas</h1>
<table>
	<tr><th>Euros</th><th>Pesetas</th></tr>
    <?PHP
      define ("CONV", 166.386);
      $i = 1;
      $fi = 10;
  
      for($i; $i <= $fi; $i++)
      print "<tr><td>".$i."</td><td>".$i*CONV."</td></tr>\n";
    ?>
</table>
</BODY>
</HTML> 