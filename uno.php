<HTML>
<BODY>
    <FORM ACTION="dos.php" METHOD="POST" enctype="multipart/form-data">
        Edad: <INPUT TYPE="text" NAME="edad">
        <INPUT TYPE="submit" VALUE="aceptar" disabled="disabled" />
        <INPUT TYPE="text" NAME="cadena" VALUE="valor por defecto" SIZE="20" /><br />
        Sexo:<INPUT TYPE="radio" NAME="sexo" VALUE="M" CHECKED>Mujer
                <INPUT TYPE="radio" NAME="sexo" VALUE="H">Hombre
        <INPUT TYPE="checkbox" NAME="extras[]" VALUE="garaje" CHECKED>Garaje
        <INPUT TYPE="checkbox" NAME="extras[]" VALUE="piscina">Piscina
        <INPUT TYPE="checkbox" NAME="extras[]" VALUE="jardin">Jardín
        <INPUT TYPE="button" NAME="actualizar" VALUE="Actualizar datos" disabled="disabled"><br />
        <input type="file" name="fichero" /><br />
        <INPUT TYPE='hidden' NAME='username' VALUE='$usuario' /><br />
        Contraseña: <INPUT TYPE="password" NAME="clave" /><br />
        <INPUT TYPE="submit" NAME="enviar" VALUE="Enviar datos"><br />
        Color:
        <SELECT NAME="color">
            <OPTION VALUE="rojo" SELECTED>Rojo
            <OPTION VALUE="verde">Verde
            <OPTION VALUE="azul">Azul
        </SELECT>
        Idiomas:
        <SELECT MULTIPLE SIZE="3" NAME="idiomas[]">
            <OPTION VALUE="ingles" SELECTED>Inglés
            <OPTION VALUE="frances">Francés
            <OPTION VALUE="aleman">Alemán
            <OPTION VALUE="holandes">Holandés
        </SELECT><br />
        Comentario:
        <TEXTAREA COLS="50" ROWS="4" NAME="comentario">
        Este libro me parece ...
        </TEXTAREA>
    </FORM>
</BODY>
</HTML>