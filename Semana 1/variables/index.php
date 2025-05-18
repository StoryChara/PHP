<?php

echo "<h1> EJERCICIOS CON VARIABLES – MÓDULO 1 </h1> ";
echo "<i>Nota: Para evitar saturar de carpetas el repositorio, todo se hará en un único archivo pero dentro de funciones para simular un entorno global.</i>";

echo "<br><br> ---------------------------------- <br><br>";

echo "1. Crea las siguientes variables según tu criterio:
<li>Una variable que me permita almacenar el nombre de una persona.</li>
<li>Una variable “x” para almacenar un número con 2 decimales.</li>
<li>Una variable constante para almacenar el valor del dólar en pesos colombianos.</li>
<li>Una variable para almacenar los primeros 7 decimales de “pi”.</li>
<li>Un variable para almacenar los primeros 15 decimales de “Euler”.</li>
<li>Mostrar el contenido de todas las variables haciendo uso de var_dump.</li>
<br> <strong>Respuesta: </strong>". "<br>";

const DOLAR = 4213.88;
function ejercicio_1(){
    $nombre = "pedro perez";
    $x = 1.23;
    define('dolar', 4213.88);
    define('pi',3.1415926);
    define('euler', 2.7182818284590);

    echo var_dump($nombre). "<br>";
    echo var_dump($x). "<br>";
    echo var_dump(dolar). "<br>";
    echo var_dump(pi). "<br>";
    echo var_dump(euler);
}

ejercicio_1();

echo "<br><br> ---------------------------------- <br><br>";

echo "2. Realizar los siguientes pasos en su respectivo orden. Corrija las siguientes variables y declaraciones de acuerdo a las características de las variables vistas. <br>";
echo "<img src='code.png' style='width: 50%; height: auto;'> <br>";

const PI = 3.14;
$nombre = 'Diego';
$apellido = 'Diaz';
static $lenguaje = 'PHP';
$saludo = 'Hola';
$edad = 18.5;
$precioCamisa = 48.500;
define('dosVARIABLES', 'Hola Saludos');
define('número', '9');
global $edad;
$ciudad = 'Medellín';
$ApellidoCompleto = 'Palacio Valencia';
const Version = '4.2.3';
echo $apellido;
$pais = 'Colombia';
$x=1; $y=2;
const NewVersion = '4.2.4';
$GLOBALS['AÑO'] = 2019;
$suma = $x + $y;
$ciudad = &$nombre;

echo "<br><br> ---------------------------------- <br><br>";

?>