<?php 
    require_once("edificio.php");
    class Hotel extends Edificio{
        
        public function calcularLimpieza() : int
        {
            $personal = $this->num_habitaciones/20;
            return $personal;
        }
        public function costeLimpieza($personal) : int
        {
            $coste_limpieza = $personal*5;
            return $coste_limpieza;
        }

    }
?>