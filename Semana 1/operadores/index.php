<?php
echo "<h1> EJERCICIOS CON OPERADORES – MÓDULO 1 </h1> ";
echo "<i>Nota: Para evitar saturar de carpetas el repositorio, todo se hará en un único archivo pero dentro de funciones para simular un entorno global.</i>";

echo "<br><br> ---------------------------------- <br><br>";

echo "1. Realizar los siguientes pasos en su respectivo orden:
<li>Crear una variable para almacenar el nombre de un estudiante.</li>
<li>Crear 5 variables para almacenar 5 diferentes notas decimales.</li>
<li>Calcular el promedio final del estudiante a partir de las 5 notas decimales. (Recuerda que un promedio se calcula sumando todos los valores y dividiendo el resultado por el número de valores).</li>
<li>Mostrar el resultado y el nombre del estudiante.</li>
<br> <strong>Respuesta: </strong>";

function ejercicio_1(): void {
    $nombre = "Mario";
    $nota_1 = 10;
    $nota_2 = 30;
    $nota_3 = 50;
    $nota_4 = 70;
    $nota_5 = 90;

    $promedio = ($nota_1+$nota_2+$nota_3+$nota_4+$nota_5)/5;

    echo "El estudiante $nombre tiene un promedio de $promedio.";
}

ejercicio_1();

echo "<br><br> ---------------------------------- <br><br>";

echo "2. Realizar los siguientes pasos en su respectivo orden:
<li>Crear una variable con el valor de 9.</li>
<li>Crear una variable con el valor de 7.</li>
<li>Calcular la suma de la variable número uno más la variable número dos.</li>
<li>Calcular la resta de la variable número uno menos la variable número dos.</li>
<br> <strong>Respuesta: </strong>";

function ejercicio_2() {
    $nueve = 9;
    $siete = 7;
    echo "La suma es ". $nueve+$siete. " y su resta es ". $nueve-$siete. ".";
}

ejercicio_2();

echo "<br><br> ---------------------------------- <br><br>";

echo "3. Realizar los siguientes pasos en su respectivo orden:
<li>Crear una variable de nombre “numeroUno” con el valor de 8.</li>
<li>Crear una variable de nombre “numeroDos” con el valor de 2.</li>
<li>Intercambiar los valores de ambas variables, de modo que “numeroUno” valga 2, y “numeroDos” valga 8. (Utiliza una variable auxiliar).</li>
<li>Mostrar los resultados de ambas variables.</li>
<br> <strong>Respuesta: </strong>";

function ejercicio_3() {
    $numeroUno = 8;
    $numeroDos = 2;
    echo "<br> Las variables iniciales son #1: $numeroUno y #2: $numeroDos.";
    $aux = $numeroDos;
    $numeroDos = $numeroUno;
    $numeroUno = $aux;
    echo "<br> Las nuevas variables son #1: $numeroUno y #2: $numeroDos.";
}

ejercicio_3(); 

echo "<br><br> ---------------------------------- <br><br>";

echo "4. Realizar los siguientes pasos:
<li>Crear una variable llamada “Estado”.</li>
<li>Realizar la siguiente operación sobre la variable “Estado”: (5 == 2) || (2 > 1).</li>
<li>Mostrar el resultado de la variable “Estado”.</li>
<br> <strong>Respuesta: </strong>";

function ejercicio_4() {
    $Estado = (5==2)||(2>1);
    echo "Estado es igual a $Estado";
}

ejercicio_4();

echo "<br><br> ---------------------------------- <br><br>";

echo "5. Realizar los siguientes pasos en su respectivo orden.
<li>Crear una variable llamada “Resultado”.</li>
<li>Dentro de la variable “Resultado”, crear una operación aritmética donde se haga uso de todos los operadores matemáticos en repetidas ocasiones con los números que tú determines. Ejemplo: (9/2) +8*2/1-(2+2) ....</li>
<li>Mostrar el resultado de la operación.</li>
<br> <strong>Respuesta: </strong>";

function ejercicio_5() {
    $Resultado = (((5+2)-(1-5)-(-(-7)*8)/5)**2)%2;
    echo "Resultado es igual a $Resultado";
}

ejercicio_5();

echo "<br><br> ---------------------------------- <br><br>";

echo "6. Realizar los siguientes pasos en su respectivo orden.
<li>Crear una variable llamada “ladoCuadrado” de valor 8.</li>
<li>Calcular el área y el perímetro del cuadrado a partir de la variable anteriormente creada.</li>
<li>Crear una variable llamada “baseTriangulo” de valor 9.</li>
<li>Crear una variable llamada “alturaTriangulo” de valor 8.</li>
<li>Crear dos variables llamadas “ladoUnoTriangulo” y “ladoDosTriangulo” de valor 8 ambas.</li>
<li>Calcular el área y el perímetro del triángulo a partir de variables anteriormente creadas.</li>
<li>Crear una variable llamada “baseRectangulo” de valor 8.</li>
<li>Crear una variable llamada “alturaRectangulo” de valor 6.</li>
<li>Calcular el área y el perímetro del rectángulo a partir de variables anteriormente creadas.</li>
<li>Mostrar el resultado de las operaciones.</li>
<br> <strong>Respuesta: </strong>";

function ejercicio_6() {
    $ladoCuadrado = 8;
    echo "<br> Cuadrado: El área es ". $ladoCuadrado**2 ." y el perímetro es ". $ladoCuadrado*4 .".";
    $baseTriangulo = 9;
    $alturaTriangulo = 8;
    $ladoUnoTriangulo = 8; $ladoDosTriangulo = 8; 
    echo "<br> Triangulo: El área es ". ($baseTriangulo*$alturaTriangulo)/2 ." y el perímetro es ". $ladoUnoTriangulo+$ladoDosTriangulo+$baseTriangulo .".";
    $baseRectangulo = 8;
    $alturaRectangulo = 6;
    echo "<br> Rectangulo: El área es ". $baseRectangulo*$alturaRectangulo ." y el perímetro es ". ($baseRectangulo*2)+($alturaRectangulo*2) .".";
}

ejercicio_6();

echo "<br><br> ---------------------------------- <br><br>";

?>