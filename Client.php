<?php 
class Client {
    public $nom;
    public $email;
    public $circuit_reserves=array();
    
    function __construct($nom, $email) {
        $this->nom = $nom;
        $this->email = $email;
    }

    function reserverCircuit($c) {
        array_push($this->circuit_reserves, $c);
    }

    function annuler_reservation($c) {
        $indice = array_search($c, $this->circuit_reserves);
        if ($indice !=-1){
            unset($this->circuit_reserves[$indice]);
            $this->circuit_reserves = array_values($this->circuit_reserves);
        } 
    }
    function prix_total() {
        $total = 0;
        foreach ($this->circuit_reserves as $circuit) {
            $total += $circuit->prix;
        }
        return $total;
    }
}




?>