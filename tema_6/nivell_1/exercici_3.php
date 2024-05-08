<?php 
    //Sobreescribir métodos
    // He partido de el ejercicio 2 del tema 4 de calcular areas
    class Shape{
        public $ample, $alçada, $area;
       
        public function altura($alçada){
            $this->alçada = $alçada;
        }
        public function base($ample){
            $this->ample = $ample;
        }
        public function resultat(){
            echo $this->area;
        }
        
    }

    class triangulo extends Shape{
        public function calcularArea(){
            $this->area = ($this->alçada * $this->ample)/2;
        }
    }
    class rectangulo extends Shape{ 
        public function calcularArea(){
            $this->area = ($this->alçada * $this->ample);
        }
        public function resultat(){
            echo "El area del rectangle que te ".$this->alçada." de alçada i ".$this->ample." de amplada es de: ";
            parent::resultat();
        }
    }
    $triangulo = new triangulo();
    $triangulo->altura(10);
    $triangulo->base(10);
    $triangulo->calcularArea();
    echo "El area del triangulo es: ";
    $triangulo->resultat();
    echo "<br>";

    $rectangulo = new rectangulo();
    $rectangulo->altura(15);
    $rectangulo->base(5);
    $rectangulo->calcularArea();
    $rectangulo->resultat();
?>