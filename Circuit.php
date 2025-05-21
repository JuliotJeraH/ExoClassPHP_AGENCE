<?php 
class Circuit {
    public $destination;
    public $duree;
    public $prix;

    function __construct($destination, $duree, $prix) {
        $this->destination = $destination;
        $this->duree = $duree;
        $this->prix = $prix;
    }


    function details() {
        return "Destination: " . $this->destination . ", Durée: " . $this->duree . " jours, Prix: " . $this->prix . " Ar";
    }
}



?>