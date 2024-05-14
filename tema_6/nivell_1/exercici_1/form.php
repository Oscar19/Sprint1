<?php session_start(); 
          
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $lenguaje = $_POST['lenguaje'];
            
    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellido'] = $apellido;
    echo "Sesión : " . $_SESSION['nombre'] . " ".$_SESSION['apellido'] ;
            
            

       

    echo "<h2>Tus datos</h2>";
    echo "Nombre de usuario: ". $nombre ."\n";
    echo "Apellido: ". $apellido ."\n";
    echo "lenguaje: ". $lenguaje ."\n";

        ?>
  
   

