<?php 
//crear client, eliminar client, afegir diners, retirar diners

    class banc{
        private $clients;

        public function __construct($clients)
        {
            $this->clients = $clients;
        }
        public function crearClient($dni, $nom){
            if (!isset($this->clients[$dni])){
                $this->clients = new Client($dni, $nom);
                echo "Client creat";
            }else{
                echo "Client ja existeix";
            }
        }
        public function eliminarClient($dni, $nom){
            if (isset($this->clients[$dni])){
                unset($this->clients[$dni]);
                echo "Client eliminat";
            }else{
                echo "Client no existeix";
            }
        }
        public function crearCompte($dni, $numCompte){
            if (isset($this->clients[$dni])){
                $this->clients = new Compte($numCompte, 0);
                $this->clients[$dni]->afegirCompte($numCompte);
                echo "El noun compte està creat \n";
            }else{
                echo "Client no existeix";
            }
        }
    }

?>