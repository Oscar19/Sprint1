<?php 
    abstract class animales{
        protected $nombre;
     

        public function __construct($nombre){
            $this->nombre = $nombre;
    
        }
        public function getNombre(){
            return $this->nombre;
        }
        abstract public function makeSound() : string;
     
    }
?>
