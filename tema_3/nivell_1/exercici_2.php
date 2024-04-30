<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2</title>
</head>
<body>
    <?php
    $X = array (10, 20, 30, 40, 50,60);
    var_dump($X);
    echo "<br>";
    echo "Tamaño del array: ".sizeof($X);
    echo "<br>";
 
    //$X = array_diff($X, array('20'));
    unset($X[2]);
    sort($X);
    var_dump($X);
    
    echo "<br>";
    echo "<br>";
    echo "Tamaño del array: ".sizeof($X);



    
    ?>
</body>
</html>