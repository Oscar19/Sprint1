<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 3</title>
</head>
<body>
<form action="" method="post">
        <input type="text" name="letra" placeholder="Escribe una letra y adivina si existe"><br>
        <input type="submit" name="envia" value="Resultado" />
    </form>
   <?php 
  
   if(isset($_POST["envia"])){

        function mirar_Caracteres($array, $caracter) {

            foreach ($array as $palabra) {

                if (strpos($palabra, $caracter) === false) {
                    
                    return false;
                }
            }
            
            return true;
        }
        
    
        $arrayDePalabras = ["Oscar", "Sacapuntas", "Lapices"];
        
        
        $caracter = $_POST["letra"];
        
        if (mirar_Caracteres($arrayDePalabras, $caracter)) {
            echo "Todas las palabras contienen el carácter '$caracter'.";
        } else {
            echo "No todas las palabras contienen el carácter '$caracter'.";
        }
        
    }
   ?> 
</body>
</html>