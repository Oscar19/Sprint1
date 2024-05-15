<?php 
    require_once("Shape.php");
    class circunferencia extends Shape{
        protected $radio;
        public function __construct($radio)  {
            $this->radio = $radio;
        }
        public function getRadio(){
            return $this->radio;
        }
        public function calcularArea(): int
        {
            $area = M_PI * pow($this->radio, 2);
            return $area;
        }
        
    }
?>