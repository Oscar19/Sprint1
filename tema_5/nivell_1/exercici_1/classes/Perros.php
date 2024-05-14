<?php 

require_once "animales.php";
    
class Perros extends animales
{

    public function makeSound() :string
    {
        return "Guay Guay!";
    }

}
?>