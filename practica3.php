<?php include 'funciones.php'; ?>
<!doctype html>
<html lang="es">
<head>
 <title>Práctica 3</title>
 <meta charset="UTF-8" />
</head>
<body>
<h1>Conversión euros a pesetas</h1>
<table>
<?php
  define ("CONV", 166.386);
  $i = 1;
  $fi = 10;
  
  for($i;$i <= $fi;$i++) {
    print "<tr><td>".$i."</td><td>".$i*CONV."</td></tr>\n";
  }
?>
</table><br />

<?php 
  cambiarDolares();
?>

</body>
</html> 