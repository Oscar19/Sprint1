<?php 
    /*Clase Pokemon:

    Atributos:
        nombre (string)
        tipo (string)
        poder (int)
        resistencia (int)
    Métodos:
        __construct($nombre, $tipo, $poder, $resistencia) (constructor para inicializar los atributos)
        mostrarInfo() (muestra la información del Pokémon)
        atacar($pokemon) (realiza un ataque a otro Pokémon, reduciendo su resistencia)

Subclases de Pokemon para tipos específicos (opcional):

    Ejemplos: PokemonFuego, PokemonAgua, PokemonPlanta
    Estas subclases pueden tener métodos adicionales específicos para su tipo.*/ 
    class Pokemon{
        protected $nombre;
        protected $tipo;
        protected $poder;
        protected $resistencia;

        public function __construct($nombre, $tipo, $poder, $resistencia)
        {
            $this->nombre = $nombre;
            $this->tipo = $tipo;
            $this->poder = $poder;
            $this->resistencia = $resistencia;
        }
        public function mostrarInfo(){
            echo "Nombre: $this->nombre\n";
            echo "Tipo: $this->tipo\n";
            echo "Poder: $this->poder\n";
            echo "Resistencia: $this->resistencia\n";
        }
        public function Atacar($pokemon){
            $danio = $this->poder;
        }
        public function recibirDanio($danio){
            $this->resistencia -= $danio;
            if ($this->resistencia < 0) {
                $this->resistencia = 0;
            }
            echo "$this->nombre ahora tiene $this->resistencia de resistencia.\n";
        }

    }
?>
hola, me llamo oscar calvo anguera, como venia diciendo, estooy estudiando poo , y por ahora no me sale mal, pero hay que mejorarlo.

tengo que practicar mucho más, pero por ahora no va mal.
por ahora arrays y todo tipo de objetos
