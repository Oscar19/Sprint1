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
        <option value="10">De cuanto en cuanto quieres contar? el valor por defecto es 10</option> 
        <?php 
            $i = 1;
            while ($i < 10) { ?>
                <option value="<?php echo $i; ?>"><?php echo $i++; ?></option>
            <?php  } ?>
    </select>
    <input type="submit" name="envia" />
</form>
<?php 
    if(isset($_POST["envia"])){
        $num = $_POST["numero"];
        $comptar = $_POST["comptar"];
    
        function calcula($comptar, $num){
            for($i = 0; $i <= $num; $i += $comptar){ 
                ?>
                <p><?php //echo $i; ?></p>
                <p><?php echo $i ." => ". $comptar; ?></p>
            <?php }
        }
        calcula($comptar, $num);
    }
?>

</body>
</html>
