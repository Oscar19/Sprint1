<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 1</title>
</head>
<body>
    <?php 
    $num = array(45, 38, 23, 15, 8);
    foreach ($num as $i) { ?>
    <p><?php echo "Número: $i.\n";?></p>
    <?php 
      } ?>
</body>
</html>
<?php ?>