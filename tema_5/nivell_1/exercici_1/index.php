<?php 
    include_once "classes/Gatos.php";
    include_once "classes/Perros.php";
    
    $gato_1 = new Gatos("Tete");
    $perro_1 = new Perros("Maya");
    
    echo "Mi perro se llama " . $perro_1->getNombre() . " y hace " . $perro_1->makeSound() . "<br/> Mi gato se llama " . $gato_1->getNombre() . " y hace " . $gato_1->makeSound();
    

?>