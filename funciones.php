<?php 

function cambiarDolares() {
	define ("CONVDOLAR", 1.10781);
	$i = 1;
	$fi = 10;
	
	print "<table>\n";
	print "<tr><th>EURO</th><th>DOLAR</th></tr>\n";
    for($i;$i <= $fi;$i++) {
      print "<tr><td>".$i."</td><td>".$i*CONVDOLAR."</td></tr>\n";
    }
	print "</table>\n";
		
	return TRUE;
}

function hora(){
    $resultado = "";
    $hora = date("H");
    
    if ($hora > 8 && $hora < 13) {
        $resultado = "Buenos días";
    }elseif ($hora > 14 && $hora < 20){
        $resultado = "Buenas tardes";
    }elseif ($hora > 21 && $hora < 7) {
        $resultado = "Buenas noches";
    }
    return $resultado;
}

function calcula_extension ($fitxer){
	//$resultado = "";
	
        $resultado = strtoupper(ltrim(stristr($fitxer, '.'), '.'));
	/*$resultado = stristr($fitxer, '.');
	$resultado = ltrim($resultado, '.');
	$resultado = strtoupper($resultado);*/
	
	return $resultado;
}

function tipo_fichero ($entrada){
	$resultado = "";
	
	switch ($entrada) {
		case 'PDF':
			$resultado = "Documento Adobe PDF";
			break;
		case 'TXT':
			$resultado = "Documento de texto";
			break;
		case 'HTML':
			$resultado = "Documento HTML";
			break;
		case 'HTM':
			$resultado = "Documento HTML";
			break;
		case 'PPT':
			$resultado = "Presentación Microsoft Powerpoint";
			break;
		case 'DOC':
			$resultado = "Documento Microsoft Word";
			break;
		case 'GIF':
			$resultado = "Imagen GIF";
			break;
		case 'JPG':
			$resultado = "Imagen JPG";
			break;
		case 'ZIP':
			$resultado = "Archivo comprimido ZIP";
			break;
		default:
			$resultado = "Archivo".$entrada;
			break;
	}
	
	return $resultado;
}

function contador($entrada){
	$resultado = 0;
	
	$cont = explode('-', $entrada);
	$resultado = count($cont);
	
	return $resultado;
}

?>