  <?php

    /*$chocolate = 0;
    $chicles = 0;
    $caramelos = 0;*/

  
   $chocolate = readline("Cantidad de chocolate: ");
    echo ($chocolate. "\n");
    echo "Cantidad de chicles:";
    $chicles = readline();

    echo "Cantidad de caramelos:";
    $caramelos = readline();


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

        echo "<br><br>Chocolate: " . $chocolate . " x " . $precio_chocolate . "€<br>";
        echo "Chicles: " . $chicles . " x " . $precio_chicles . "€<br>";
        echo "Caramelos: " . $caramelos . " x " . $precio_caramelos . "€<br>";
        echo "Total: " . calcular_total($chocolate, $chicles, $caramelos) . "€<br>";
    
    ?>
