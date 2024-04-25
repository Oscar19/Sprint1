<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2</title>
</head>
<body>
    <h1>Que quieres comprar?</h1>
   
    <form action="" method="post">
        <input type="number" name="chocolate" placeholder="Chocolate"><br><br>
        <input type="number" name="chicles" placeholder="Chicles"><br><br>
        <input type="number" name="caramelos" placeholder="Caramelos"><br><br>
        <input type="submit" name="envia" value="Precio de la compra" />
    </form>

    <?php
    if(isset($_POST["envia"])){
        $chocolate = isset($_POST["chocolate"]) ? $_POST["chocolate"] : 0;
        $chicles = isset($_POST["chicles"]) ? $_POST["chicles"] : 0;
        $caramelos = isset($_POST["caramelos"]) ? $_POST["caramelos"] : 0;

        function chocolate($cantidad){
            $precio = 1;
            $precio_chocolate = $cantidad * $precio;
            return $precio_chocolate;
        }

        function chicles($cantidad){
            $precio = 0.5;
            $precio_chicles = $cantidad * $precio;
            return $precio_chicles;
        }

        function caramelos($cantidad){
            $precio = 1.5;
            $precio_caramelos = $cantidad * $precio;
            return $precio_caramelos;
        }

        $precio_chocolate = chocolate($chocolate);
        $precio_chicles = chicles($chicles);
        $precio_caramelos = caramelos($caramelos);

        function calcular_total($chocolate, $chicles, $caramelos){
            $total = chocolate($chocolate) + chicles($chicles) + caramelos($caramelos);
            return $total;
        }

        echo "Chocolate: " . $chocolate . " x " . $precio_chocolate . "€<br>";
        echo "Chicles: " . $chicles . " x " . $precio_chicles . "€<br>";
        echo "Caramelos: " . $caramelos . " x " . $precio_caramelos . "€<br>";
        echo "Total: " . calcular_total($chocolate, $chicles, $caramelos) . "€<br>";
    }
    ?>

</body>
</html>