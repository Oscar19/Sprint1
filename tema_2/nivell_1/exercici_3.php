<?php 
$exercici = "Ejercicio 3";
echo "<h1>" . $exercici . "</h1>";
echo "<br><br>";
echo "<h4>Ejercicio 3 A</h4>";
$x = 17;
$y = 7;
$n = 5.5;
$m = 8.2;
echo "La variable x es ". $x . ", la variable y es ". $y;
echo "<br><br>";

$suma = $x + $y;
$resta = $x - $y;
$multiplicacion = $x * $y;
$modulo = $x & $y;

echo "<br><br>";
echo "La suma de " . $x . " + " . $y ." = ". $suma;
echo "<br><br>";
echo "La resta de " . $x . " - " . $y ." = ". $resta;
echo "<br><br>";
echo "El producto de " . $x . " * " . $y ." = ". $multiplicacion;
echo "<br><br>";
echo "El módulo de " . $x . " y " . $y ." = ". $modulo;
echo "<br><br>";
echo "La variable n es ". $n . ", la variable m es ". $m;
echo "<br><br>";
echo "<br><br>";
echo "La suma de " . $n . " + " . $m ." = ". $n + $m;
echo "<br><br>";
echo "La resta de " . $n . " - " . $m ." = ". $n - $m;
echo "<br><br>";
echo "El producto de " . $n . " * " . $m ." = ". $n * $m;
echo "<br><br>";
echo "El módulo de " . $n . " y " . $m ." = ". $n % $m;
echo "<br><br>";
echo "<br><br>";
echo "la suma de todas las variables es ". $x + $y + $n + $m;
echo "<br><br>";
echo "Dobles de las variables";
echo "<br><br>";
echo $x * 2 .", ". $y * 2 . ", ". $n * 2 . ", ". $m * 2;
echo "<br><br>";
echo "La suma de todas la variables es: ". $x + $y + $n + $m;
echo "<br><br>";
echo "El producto de todas la variables es: ". $x * $y * $n * $m;
echo "<br><br>";
echo "<h4>Ejercicio 3 B</h4>";
echo "<br><br>";
echo "<br><br>";

?>
<form action="" method="post">
    <input type="number" name="numero1" id="" placeholder="Introduce el primer número">
    <input type="number" name="numero2" id="" placeholder="Introduce el segundo número">
    <select name="operacion" id="">
    <option value="">Que quieres hacer?</option>
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select>
    <input type="submit" />
</form>
<?php

$num1 = $_POST["numero1"];
$num2 = $_POST["numero2"];
$opera = $_POST["operacion"];

//echo gettype($opera);
function calcular($num, $num2, $opera){
    switch($opera){
        case "sumar": 
            $resultado = $num1 + $num2;
        break;
        case "restar":
            $resultado = $num1 - $num2;
        break;
        case "multiplicar" :
            $resultado = $num1 * $num2;
        break;
        case "dividir" :
            $resultado = $num1 / $num2;
        break;
    }
    return $resultado;
}
$calculo = calcular($num1, $num2, $opera);
echo "El resultado es: ". $calculo;


?>
