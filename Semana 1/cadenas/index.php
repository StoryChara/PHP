<?php

echo "<h1> EJERCICIOS CON CADENAS – MÓDULO 1 </h1> ";

$cadena = "Diego-Palacio.5;28;41;08";
echo "1. Dada la siguiente cadena “Diego-Palacio.5;28;41;08” remplace los caracteres “-.;” de forma que la cadena termine de la siguiente forma: “Diego Palacio 5284108”. <br>";
$cadena = str_replace("-", " ", $cadena);
$cadena = str_replace(".", " ", $cadena);
$cadena = str_replace(";", "", $cadena);
echo "<strong>Resultado: </strong>".$cadena;

echo "<br><br> ---------------------------------- <br><br>";

echo "2. A partir de la contraseña: “dapv0102”, cifrar la misma con sha1 y md5, mostrar ambos resultados. <br>";
$cadena = "dapv0102";
echo "<strong>Resultado: </strong>"."<br>";
echo "SHA1: ".sha1($cadena, false)."<br>";
echo "MD5: ".md5($cadena, false);

echo "<br><br> ---------------------------------- <br><br>";

echo "3. Determinar la longitud del siguiente mensaje: “Buenos días estimados estudiantes. Hoy vamos aprender PHP”. <br>";
$cadena = "Buenos días estimados estudiantes. Hoy vamos aprender PHP";
echo "<strong>Resultado: </strong>". "La longitud es de ".strlen( $cadena )." carácteres.";

echo "<br><br> ---------------------------------- <br><br>";

echo "4. Almacena todo tu nombre en un variable, por ejemplo: “diego alejandro palacio valencia” y este mismo conviértelo a mayúscula por medio de una función de cadenas. <br>";
$cadena = "maría josé jara herrera";
$cadena = mb_strtoupper( $cadena, "UTF-8" );
echo "<strong>Resultado: </strong>". $cadena;

echo '<br><br> ---------------------------------- <br><br>';

echo "5. Almacena todo tu nombre en un variable, por ejemplo: “DIEGO ALEJANDRO PALACIO VALENCIA” y este mismo conviértelo a minúsculas por medio de una función de cadenas. <br>";
echo "<strong>Resultado: </strong>". mb_strtolower( $cadena,"UTF-8");

?>