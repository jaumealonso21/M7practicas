<!doctype html>
<html lang="es">
<head>
  <title>Práctica 3_3</title>
  <meta charset="UTF-8" />
  <style>
  	table, th, td {border: 1px none;}
  	th {background-color: #FFEECC;}
  	tr {background-color: #CCCCCC;}
  	tr:nth-child(even) {background-color: #CCEEFF;}
  	td {text-align: center;}
  </style>
</head>
<body>
<h1>Conversión euros/pesetas</h1>
<table>
  <tr><th>Euros</th><th>Pesetas</th></tr>
    <?PHP
      define ("CONV", 166.386);
      $i = 1;
      $fi = 10;
  
      for($i; $i <= $fi; $i++){
        print "<tr><td>".$i."</td><td>".$i*CONV."</td></tr>\n";
      }
    ?>
</table>
</body>
</html> 