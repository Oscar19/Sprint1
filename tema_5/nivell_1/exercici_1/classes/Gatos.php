<?php 
    require_once "animales.php";
    
    class Gato extends animales
    {
    
        public function makeSound() :string
        {
            return "Miau miau!";
        }
    
    }
?>