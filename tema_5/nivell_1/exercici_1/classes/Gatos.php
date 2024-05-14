<?php 
    require_once "animales.php";
    
    class Gatos extends animales
    {
    
        public function makeSound() :string
        {
            return "Miau miau!";
        }
    
    }
?>