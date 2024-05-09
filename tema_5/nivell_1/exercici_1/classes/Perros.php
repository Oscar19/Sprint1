<?php 

require_once "animales.php";
    
class Perro extends animales
{

    public function makeSound() :string
    {
        return "Guay Guay!";
    }

}
?>