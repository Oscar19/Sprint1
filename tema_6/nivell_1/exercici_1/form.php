<?php session_start(); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar valores</title>
    <style>
        .content-header{
            width: 100%;
            display: grid;
            grid-template-columns: 6fr 2fr;
        }
        
        .content{
            width:100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="content-header">
            <div class="col-9">
                <h1>Respuesta formulario</h1>
            </div>
            <div class="col-3">
            <?php 
          
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $lenguaje = $_POST['lenguaje'];
            
                $_SESSION['nombre'] = $nombre;
                $_SESSION['apellido'] = $apellido;
                echo "Sesión : " . $_SESSION['nombre'] . " ".$_SESSION['apellido'] ;
            
            ?>
            </div>
            
        </div>
    </header>
    <div class="content">
    <?php 

       

        echo "<h2>Tus datos</h2>";
        echo "Nombre de usuario: ". $nombre ."<br>";
        echo "Apellido: ". $apellido ."<br>";
        echo "lenguaje: ". $lenguaje ."<br>";

        ?>
    </div>

</body>
</html>
   

