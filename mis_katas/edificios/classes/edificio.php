<?php 
    abstract class Edificio{
        protected $nombre;
        protected $plantas;
        protected $superficie;
        public function __construct(string $nombre, int $plantas, int $superficie){
            $this->nombre = $nombre;
            $this->plantas = $plantas;
            $this->superficie = $superficie;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getPlantas(){
            return $this->plantas;
        }
        public function getSuperficie(){
            return $this->superficie;
        }
    }
?>