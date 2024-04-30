<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 1</title>
</head>
<body>
    <?php 
        $array1 = array(1,2,3,4,5);
        $array2 = array(5,3,6,7,9);
        //$arrayTot = array_merge($array1, $array2);
        echo "<pre>";
        echo "Repetidos";
        echo "<pre>";
        $repetidos = array_intersect($array1,$array2);
        //var_dump($repetidos);
        print_r($repetidos);
        echo "<pre>";
        $arrayTot = array_merge($array1, $array2);
        echo "<pre>";
        echo "Juntar arrays";
        echo "<pre>";
        print_r($arrayTot);
        /*echo "Juntar arrays";
        echo "<pre>";
        var_dump($arrayTot);

        //$repetidos_sin = array_diff_assoc($array1, $array2);
        $repetidos_sin = array_unique($arrayTot);
        echo "<pre>";
        echo "Eliminar repetidos";
        echo "<pre>";
        var_dump($repetidos_sin);
        echo "<pre>";
        echo "repetidos";
        echo "<pre>";
        $repetidos = array_intersect_assoc($array1, $array2);
        var_dump($repetidos);*/

    ?>
    
</body>
</html>