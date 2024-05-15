<?php
    require_once("Shape.php");
   // include_once("Resultat.php");
    class triangulo extends Shape{
        public function calcularArea(){
            $area = ($this->altura * $this->ample)/2;
            return $area;
        }
    }
?>