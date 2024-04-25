<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 5</title>
</head>
<body>
    <h3>Introduce una nota</h3>
    <form action="" method="post">
        
        <input type="number" name="nota" id="" placeholder="Introduce una nota">
        <input type="submit" value="Calcular" name="envia">
        
    </form>
    <?php 
    if(isset($_POST["envia"]))
    {
        $nota = $_POST["nota"];
        function calcular_nota($nota){
            if($nota >= 60 ){
                $resultado = "Está en primera división";
            }
            elseif($nota >= 45 && $nota <= 59){
                $resultado = "Está en segunda división";
            }
            elseif($nota >= 33 && $nota <= 44){
                $resultado = "Está en tercera división";
            }
            elseif($nota <= 32){
                $resultado = "No está aprobado";
            }
            else{
                $resultado = "no es una nota";
            }
            return $resultado;

        }
        echo calcular_nota($nota);
    
    }
      
    ?>
</body>
</html>