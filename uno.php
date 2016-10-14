<HTML>
<BODY>
<FORM ACTION="dos.php" METHOD="POST">
Edad: <INPUT TYPE="text" NAME="edad">
<INPUT TYPE="submit" VALUE="aceptar">
<INPUT TYPE="text" NAME="cadena" VALUE="valor por defecto" SIZE="20"><br>
Sexo:<INPUT TYPE="radio" NAME="sexo" VALUE="M" CHECKED>Mujer
	<INPUT TYPE="radio" NAME="sexo" VALUE="H">Hombre
<INPUT TYPE="checkbox" NAME="extras[]" VALUE="garaje" CHECKED>Garaje
<INPUT TYPE="checkbox" NAME="extras[]" VALUE="piscina">Piscina
<INPUT TYPE="checkbox" NAME="extras[]" VALUE="jardin">Jardín
<INPUT TYPE="button" NAME="actualizar" VALUE="Actualizar datos" disabled="disabled">
</FORM>
</BODY>
</HTML>