<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 6</title>
</head>
<body>
    <h1>Exercici 6</h1>
<form method="post" action="">
    <input type="submit" value="Mira a ver si Charlie ha mordido el dedo o no..." name="envia">
</form>

<?php
if(isset($_POST["envia"])){
    function isBitten() {
        $random_number = rand(0, 1);
        if ($random_number <= 0.5) {
            return true;
        } else {
            return false;
        }
    }

    if (isBitten()) {
        echo "<h3>Charlie te ha mordido el dedo.</h3>";
    } else {
        echo "<h3>Charlie no te ha mordido el dedo.</h3>";
    }
}
?>

    
</body>
</html>