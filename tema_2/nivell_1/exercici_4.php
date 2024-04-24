<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 4</title>
</head>
<body>
<form action="" method="post">
    <input type="number" name="numero" placeholder="Introduce un número">
    <select name="comptar" id="">
        <option value="0">De cuanto en cuanto quieres contar?</option>
        <?php 
            $i = 1;
            while ($i < 10) { ?>
                <option value="<?php echo $i; ?>"><?php echo $i++; ?></option>
            <?php  } ?>
    </select>
    <input type="submit" />
</form>
<?php 
    
    
    function calcula($comptar, $num){
       
        $num = $_POST["numero"];
        $comptar = $_POST["comptar"];
   
            
                for($i = 0; $i <= $num; $i++){ 
                    $n = $i * $comptar;
                    ?>
                
                    <p><?php echo $i ."+". $comptar . " = ". $n; ?></p>
               <?php }
            
             
       
          
   }
    calcula($comptar, $num);


?>
</body>
</html>

<?php 
    
    /*function comptar($nums, $saltar){


    }*/
?>